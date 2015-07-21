<?php

/* VientoSurAppAppBundle:Hotel:searchHotels.html.twig */
class __TwigTemplate_a37ec27497c41342d64e08e05cc62e4c49b9c0ddeb614da3be763b073af4dcdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ad053f03d79ec26f6e344e3629bb4c6e0dec6a688502094db22b7b6d7fae30d = $this->env->getExtension("native_profiler");
        $__internal_0ad053f03d79ec26f6e344e3629bb4c6e0dec6a688502094db22b7b6d7fae30d->enter($__internal_0ad053f03d79ec26f6e344e3629bb4c6e0dec6a688502094db22b7b6d7fae30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VientoSurAppAppBundle:Hotel:searchHotels.html.twig"));

        // line 1
        echo "<form name=\"searchHotel\" id=\"search-hotels\" action =\"";
        echo $this->env->getExtension('routing')->getPath("viento_sur_app_app_homepage_send_hotels");
        echo "\" method=\"POST\">

    <div id=\"contenedorTipoViaje\" class=\"city-container\">
        <label id=\"DestinationCityLabel\" for=\"destinationCity\">Destino / Hotel</label>
        <input id=\"autocomplete\" name=\"autocomplete\" type=\"text\" class=\"city-input required\" data-provide=\"typeahead\" placeholder=\"Ingrese una ciudad o un nombre de hotel\">
        <input id=\"destinationCity\" name=\"cityInput\" type=\"hidden\">

    </div>

    <div class=\"hotelDates-container\">
        <div class=\"date-container\" id=\"fromDateHotelInputContainer\">\t<!--Departure date input-->
            <label id=\"fromDateHotelLabel\" for=\"fromCalendarHotel\">Entrada</label>
            <input type=\"text\" placeholder=\"dd-mm-aaaa\" class=\"input-date required\" id=\"fromCalendarHotel\" name=\"fromCalendarHotel\">
            <span class=\"mainSprite calendar\"></span>
        </div>
        <p class=\"date-separator\">&nbsp;</p>
        <div class=\"date-container\" id=\"toDateHotelInputContainer\">\t<!--Arrival date input-->
            <label id=\"toDateHotelLabel\" for=\"toCalendarHotel\">Salida</label>
            <input type=\"text\" placeholder=\"dd-mm-aaaa\" class=\"input-date required\" id=\"toCalendarHotel\" name=\"toCalendarHotel\">
            <span class=\"mainSprite calendar\"></span>
        </div>
        <div class=\"clearBox\"></div>
    </div>
    <input id=\"hotelsMinDays\" type=\"hidden\" class=\"ignore\" value=\"1\" >

    <input id=\"ageSelectorMessage\" type=\"hidden\" class=\"ignore\" value=\"Por favor, ingrese la edad.\" >

    <div id=\"passengersHotel\" class=\"passengersHotel\">
        <div class=\"rooms-container\">
            <label for=\"roomsQty\">Cantidad</label>
            <select id=\"roomsQty\" name=\"habitacionesCant\">
                <option value=\"1\">1 Habitación</option>
                <option value=\"2\">2 Habitaciones</option>
                <option value=\"3\">3 Habitaciones</option>
                <option value=\"4\">4 Habitaciones</option>
            </select>
        </div>

        <div class=\"ho-passengersContainer\">
            <ul class=\"passengersList\">
                <li id=\"room1\">
                    <label class=\"room-label roomLabel\" style=\"display: none\">Habitación 1</label>
                    <div class=\"ho-passengersBox\">
                        <div class=\"ho-passengerBox\">
                            <label for=\"adults1\">Adultos</label>
                            <input type=\"hidden\" style=\"display:none\" value=\"0\" id=\"adultsRoom1\">
                            <select id=\"adults1\" name=\"adultsSelector1\">
                                <option value=\"1\" >1</option>
                                <option value=\"2\" selected=\"selected\">2</option>
                                <option value=\"3\" >3</option>
                                <option value=\"4\" >4</option>
                                <option value=\"5\" >5</option>
                                <option value=\"6\" >6</option>
                                <option value=\"7\" >7</option>
                            </select>
                        </div>

                        <div class=\"ho-passengerBox\">
                            <label for=\"childrenRoom1\">Menores</label>
                            <select id=\"childrenRoom1\" name=\"childrenRoomSelector1\">
                                <option value=\"0\">0</option>
                                <option value=\"1\">1</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                            </select>
                            <div class=\"clearBox\"></div>
                        </div>

                        <div class=\"hot-agesContainer\">
                            <label id=\"lblAge1\">Edad de los menores</label>
                            <ul id=\"ulAgeRoom1\">
                                <li id=\"childAge1room1\">
                                    <select id=\"childAge11\" class=\"sb-age required\" name=\"childAgeSelector-1-1\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge2room1\">
                                    <select id=\"childAge21\" class=\"sb-age required\" name=\"childAgeSelector-1-2\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge3room1\">
                                    <select id=\"childAge31\" class=\"sb-age required\" name=\"childAgeSelector-1-3\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge4room1\">
                                    <select id=\"childAge41\" class=\"sb-age required\" name=\"childAgeSelector-1-4\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge5room1\">
                                    <select id=\"childAge51\" class=\"sb-age required\" name=\"childAgeSelector-1-5\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge6room1\">
                                    <select id=\"childAge61\" class=\"sb-age required\" name=\"childAgeSelector-1-6\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                            </ul>
                            <div class=\"clearBox\"></div>
                        </div>
                    </div>
                    <div class=\"clearBox\"></div>
                </li>
                <li id=\"room2\" class=\"hide\">
                    <label class=\"room-label roomLabel\" style=\"display: none\">Habitación 2</label>
                    <div class=\"ho-passengersBox\">
                        <div class=\"ho-passengerBox\">
                            <label for=\"adults2\">Adultos</label>
                            <input type=\"hidden\" style=\"display:none\" value=\"0\" id=\"adultsRoom2\">
                            <select id=\"adults2\" name=\"adultsSelector2\">
                                <option value=\"1\" >1</option>
                                <option value=\"2\" selected=\"selected\">2</option>
                                <option value=\"3\" >3</option>
                                <option value=\"4\" >4</option>
                                <option value=\"5\" >5</option>
                                <option value=\"6\" >6</option>
                                <option value=\"7\" >7</option>
                            </select>
                        </div>

                        <div class=\"ho-passengerBox\">
                            <label for=\"childrenRoom2\">Menores</label>
                            <select id=\"childrenRoom2\" name=\"childrenRoomSelector2\">
                                <option value=\"0\">0</option>
                                <option value=\"1\">1</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                            </select>
                            <div class=\"clearBox\"></div>
                        </div>

                        <div class=\"hot-agesContainer\">
                            <label id=\"lblAge2\">Edad de los menores</label>
                            <ul id=\"ulAgeRoom2\">
                                <li id=\"childAge1room2\">
                                    <select id=\"childAge12\" class=\"sb-age required\" name=\"childAgeSelector-2-1\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge2room2\">
                                    <select id=\"childAge22\" class=\"sb-age required\" name=\"childAgeSelector-2-2\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge3room2\">
                                    <select id=\"childAge32\" class=\"sb-age required\" name=\"childAgeSelector-2-3\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge4room2\">
                                    <select id=\"childAge42\" class=\"sb-age required\" name=\"childAgeSelector-2-4\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge5room2\">
                                    <select id=\"childAge52\" class=\"sb-age required\" name=\"childAgeSelector-2-5\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge6room2\">
                                    <select id=\"childAge62\" class=\"sb-age required\" name=\"childAgeSelector-2-6\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                            </ul>
                            <div class=\"clearBox\"></div>
                        </div>
                    </div>
                    <div class=\"clearBox\"></div>
                </li>
                <li id=\"room3\" class=\"hide\">
                    <label class=\"room-label roomLabel\" style=\"display: none\">Habitación 3</label>
                    <div class=\"ho-passengersBox\">
                        <div class=\"ho-passengerBox\">
                            <label for=\"adults3\">Adultos</label>
                            <input type=\"hidden\" style=\"display:none\" value=\"0\" id=\"adultsRoom3\">
                            <select id=\"adults3\" name=\"adultsSelector3\">
                                <option value=\"1\" >1</option>
                                <option value=\"2\" selected=\"selected\">2</option>
                                <option value=\"3\" >3</option>
                                <option value=\"4\" >4</option>
                                <option value=\"5\" >5</option>
                                <option value=\"6\" >6</option>
                                <option value=\"7\" >7</option>
                            </select>
                        </div>

                        <div class=\"ho-passengerBox\">
                            <label for=\"childrenRoom3\">Menores</label>
                            <select id=\"childrenRoom3\" name=\"childrenRoomSelector3\">
                                <option value=\"0\">0</option>
                                <option value=\"1\">1</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                            </select>
                            <div class=\"clearBox\"></div>
                        </div>

                        <div class=\"hot-agesContainer\">
                            <label id=\"lblAge3\">Edad de los menores</label>
                            <ul id=\"ulAgeRoom3\">
                                <li id=\"childAge1room3\">
                                    <select id=\"childAge13\" class=\"sb-age required\" name=\"childAgeSelector-3-1\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge2room3\">
                                    <select id=\"childAge23\" class=\"sb-age required\" name=\"childAgeSelector-3-2\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge3room3\">
                                    <select id=\"childAge33\" class=\"sb-age required\" name=\"childAgeSelector-3-3\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge4room3\">
                                    <select id=\"childAge43\" class=\"sb-age required\" name=\"childAgeSelector-3-4\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge5room3\">
                                    <select id=\"childAge53\" class=\"sb-age required\" name=\"childAgeSelector-3-5\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge6room3\">
                                    <select id=\"childAge63\" class=\"sb-age required\" name=\"childAgeSelector-3-6\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                            </ul>
                            <div class=\"clearBox\"></div>
                        </div>
                    </div>
                    <div class=\"clearBox\"></div>
                </li>
                <li id=\"room4\" class=\"hide\">
                    <label class=\"room-label roomLabel\" style=\"display: none\">Habitación 4</label>
                    <div class=\"ho-passengersBox\">
                        <div class=\"ho-passengerBox\">
                            <label for=\"adults4\">Adultos</label>
                            <input type=\"hidden\" style=\"display:none\" value=\"0\" id=\"adultsRoom4\">
                            <select id=\"adults4\" name=\"adultsSelector4\">
                                <option value=\"1\" >1</option>
                                <option value=\"2\" selected=\"selected\">2</option>
                                <option value=\"3\" >3</option>
                                <option value=\"4\" >4</option>
                                <option value=\"5\" >5</option>
                                <option value=\"6\" >6</option>
                                <option value=\"7\" >7</option>
                            </select>
                        </div>

                        <div class=\"ho-passengerBox\">
                            <label for=\"childrenRoom4\">Menores</label>
                            <select id=\"childrenRoom4\" name=\"childrenRoomSelector4\">
                                <option value=\"0\">0</option>
                                <option value=\"1\">1</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                            </select>
                            <div class=\"clearBox\"></div>
                        </div>

                        <div class=\"hot-agesContainer\">
                            <label id=\"lblAge4\">Edad de los menores</label>
                            <ul id=\"ulAgeRoom4\">
                                <li id=\"childAge1room4\">
                                    <select id=\"childAge14\" class=\"sb-age required\" name=\"childAgeSelector-4-1\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge2room4\">
                                    <select id=\"childAge24\" class=\"sb-age required\" name=\"childAgeSelector-4-2\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge3room4\">
                                    <select id=\"childAge34\" class=\"sb-age required\" name=\"childAgeSelector-4-3\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge4room4\">
                                    <select id=\"childAge44\" class=\"sb-age required\" name=\"childAgeSelector-4-4\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge5room4\">
                                    <select id=\"childAge54\" class=\"sb-age required\" name=\"childAgeSelector-4-5\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                                <li id=\"childAge6room4\">
                                    <select id=\"childAge64\" class=\"sb-age required\" name=\"childAgeSelector-4-6\">
                                        <option value=\"\" selected=\"selected\">?</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                        <option value=\"13\">13</option>
                                        <option value=\"14\">14</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"16\">16</option>
                                        <option value=\"17\">17</option>
                                    </select>
                                </li>
                            </ul>
                            <div class=\"clearBox\"></div>
                        </div>
                    </div>
                    <div class=\"clearBox\"></div>
                </li>
            </ul>
        </div>
        <!-- This code is necesary to complete the mini searchBox. Create hidden fields in order to determine the values of each select -->
    </div>


    <div class=\"mod-searchbutton\">
        <button type=\"submit\">Buscar Hoteles</button>
    </div>

    <div class=\"clearBox\"></div>
</form>
<script>
    jQuery(document).ready(function () {
        
    var url = Routing.generate('hotel_autocomplete');
    \$('#autocomplete').autocomplete({
    serviceUrl: url,
            onSelect: function (suggestion) {
                \$(\"#destinationCity\").val(suggestion.data);
            }
    });
    });
</script>";
        
        $__internal_0ad053f03d79ec26f6e344e3629bb4c6e0dec6a688502094db22b7b6d7fae30d->leave($__internal_0ad053f03d79ec26f6e344e3629bb4c6e0dec6a688502094db22b7b6d7fae30d_prof);

    }

    public function getTemplateName()
    {
        return "VientoSurAppAppBundle:Hotel:searchHotels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
