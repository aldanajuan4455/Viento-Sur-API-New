<?php
/**
 * Created by Yolanda Gonzalez.
 * User: yolandag0302@gmail.com
 * Date: 3/8/16
 * Time: 1:57 PM
 */

namespace VientoSur\App\AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template("VientoSurAppAppBundle:Index:index.html.twig")
     */
    public function indexAction()
    {
        return array(
            'isTest' => $this->getParameter('is_test')
        );
    }

    /**
     * @Route("/change-option", name="change_option")
     * @Template("VientoSurAppAppBundle:Index:option.html.twig")
     */
    public function changeOptionAction(Request $request)
    {

        $languages['es']['icon'] = 'bundles/vientosurappapp/images/fl-ar.png';
        $languages['es']['name'] = 'Español';
        //$languages['en']['icon'] = 'bundles/vientosurappapp/images/fl-en.png';
        //$languages['en']['name'] = 'English';
        //$languages['pt']['icon'] = 'bundles/vientosurappapp/images/flag_pt.png';
        //$languages['pt']['name'] = 'Portuguese';

        $currencies['ars']['name'] = "AR$";
        //$currencies['usd']['name'] = "USD";
        //$currencies['eur']['name'] = "EUR";


        $language = $request->get('language', null);
        if ($language) {
            $this->get('session')->set('language', $language);
            $currencies[$language]['active'] = true;
        }

        $currency = $request->get('currency', null);
        if ($currency) {
            $this->get('session')->set('currency', $currency);
            $currencies[$currency]['active'] = true;
        }

        return array(
            'currencies' => $currencies,
            'languages' => $languages
        );
    }

    /**
     *
     * @Route("/autocomplete/", name="hotel_autocomplete")
     * @Method("GET")
     */
    public function autoCompleteHotelAction(Request $request)
    {
        $type = 'HOTELS';
        $urlParams = [
            'query' => $request->get('query'),
            'product' => $type,
            'locale' => 'es-AR',
            'city_result' => '10'
        ];

        $results = $this->get('despegar')->autocomplete($urlParams);
        $response = [];
        if ($results && !isset($results['code'])) {
            foreach ($results as $item) {
                $city = Array();
                $city["value"] = $item["description"];
                $city["data"] = substr($item["id"], 5);
                $response[] = $city;
            }
        }
        return new JsonResponse(array("suggestions" => $response, 'query' => $request->get('query'), 'test' => $results));
    }

    /**
     *
     * @Route("/autocomplete-state/", name="state_autocomplete")
     * @Method("GET")
     */
    public function autoCompleteStateAction(Request $request)
    {
        $type = 'HOTELS';
        $urlParams = [
            'query' => $request->get('query'),
            'product' => $type,
            'locale' => 'es-AR',
            'administrative_division_result' => '10'
        ];

        $results = $this->get('despegar')->autocomplete($urlParams);
        $response = [];
        if ($results && !isset($results['code'])) {
            foreach ($results as $item) {
                $city = [
                    'value' => $item["description"],
                    'data' => $item['item']["id"]
                ];
                $response[] = $city;
            }
        }
        return new JsonResponse(array("suggestions" => $response, 'query' => $request->get('query'), 'test' => $results));
    }

    /**
     *
     * @Route("/autocomplete-city/{state}", name="city_autocomplete")
     * @Method("GET")
     */
    public function autoCompleteCityAction($state, Request $request)
    {
        $type = 'HOTELS';
        $urlParams = [
            'query' => $request->get('query'),
            'product' => $type,
            'locale' => 'es-AR',
            'city_result' => '10',
            'political_divisions_to_filter_results' => $state
        ];

        $results = $this->get('despegar')->autocomplete($urlParams);
        $response = [];
        if ($results && !isset($results['code'])) {
            foreach ($results as $item) {
                $city = [
                    'value' => $item["description"],
                    'data' => $item['item']["id"]
                ];
                $response[] = $city;
            }
        }
        return new JsonResponse(array("suggestions" => $response, 'query' => $request->get('query'), 'test' => $results));
    }
}
