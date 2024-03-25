@extends('layout.master')
@section('content')
<div class="container bootdey">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
                <div class="col-md-6 col-12">
                    <div class="pro-img-details">
                        <img id="mainImage" src="https://www.bootdey.com/image/550x380/FFB6C1/000000" alt="">
                    </div>
                    <div class="pro-img-list">
                        <a href="#" onclick="changeImage('https://www.bootdey.com/image/550x380/FFB6C1/000000')">
                            <img src="https://www.bootdey.com/image/115x100/87CEFA/000000" alt="">
                        </a>
                        <a href="#" onclick="changeImage('https://www.bootdey.com/image/115x100/FF7F50/000000')">
                            <img src="https://www.bootdey.com/image/115x100/FF7F50/000000" alt="">
                        </a>
                        <a href="#" onclick="changeImage('https://www.bootdey.com/image/115x100/20B2AA/000000')">
                            <img src="https://www.bootdey.com/image/115x100/20B2AA/000000" alt="">
                        </a>
                        <a href="#" onclick="changeImage('https://www.bootdey.com/image/120x100/20B2AA/000000')">
                            <img src="https://www.bootdey.com/image/120x100/20B2AA/000000" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <h4 class="pro-d-title">
                        <a href="#" class="">
                            Leopard Shirt Dress
                        </a>
                    </h4>
                    <p class="pro-d-desc">
                        Praesent ac condimentum felis. Nulla at nisl orci, at dignissim dolor, The best product
                        descriptions address your ideal buyer directly and personally. The best product descriptions
                        address your ideal buyer directly and personally.
                    </p>
                    <div class="product_meta">
                        <span class="posted_in d-block"> <strong>Wattage:</strong> </span>
                        <div class="wat-box-wrapper">
                            <div class="wat-box">
                                40W
                            </div>
                            <div class="wat-box">
                                50W
                            </div>
                            <div class="wat-box">
                                60W
                            </div>
                            <div class="wat-box">
                                70W
                            </div>
                            <div class="wat-box">
                                80W
                            </div>
                            <div class="wat-box">
                                90W
                            </div>
                            <div class="wat-box">
                                100W
                            </div>
                            <div class="wat-box">
                                40W
                            </div>
                            <div class="wat-box">
                                40W
                            </div>
                        </div>
                    </div>

                    <div class="product_meta luminous">
                        <span class="posted_in d-block"> <strong>Luminous Efficacy:</strong> </span>
                        <div class="wat-box-wrapper">
                            <div class="wat-box">
                                150Lm/W
                            </div>
                            <div class="wat-box">
                                160Lm/W
                            </div>
                            <div class="wat-box">
                                170Lm/W
                            </div>
                            <div class="wat-box">
                                180Lm/W
                            </div>
                            <div class="wat-box">
                                190Lm/W
                            </div>
                        </div>
                    </div>
                    <div class="m-bot15"> <strong>Price : </strong> <span class="pro-price"> $300.00</span></div>
                </div>
            </div>
        </section>
    </div>
    <div class="container single-tab">
        <div class="row">
            <div class="col-xs-12 ">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="parameter" data-toggle="tab" href="#nav-home" role="tab"
                            aria-controls="nav-home" aria-selected="true">
                            PARAMETRES
                        </a>
                        <a class="nav-item nav-link" id="structure" data-toggle="tab" href="#nav-profile" role="tab"
                            aria-controls="nav-profile" aria-selected="false">STRUCTURE</a>
                        <a class="nav-item nav-link" id="light" data-toggle="tab" href="#nav-contact" role="tab"
                            aria-controls="nav-contact" aria-selected="false">
                            LIGHT DISTRIBUTION</a>
                        <a class="nav-item nav-link" id="specs" data-toggle="tab" href="#nav-about" role="tab"
                            aria-controls="nav-about" aria-selected="false">
                            SPECS SHEET</a>
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="parameter">
                        <ul>
                            <li>SWIFT SERIES makes an affordable LED road lighting solution.</li>
                            <li>The SWIFT SERIES street light family provides your city with a flexible lighting system
                                which
                                can be deployed anywhere in urban spaces, highways and rural areas.</li>
                            <li>This model is an IP66 protection level, anti-collision level IK08, and IK09
                                anti-collision
                                level can be customized.</li>
                            <li>As it support changing the lens angle, it can achieve different light distribution types
                                for
                                different projects.</li>
                            <li>This model is compatible with built-in light sensors, installation of NEMA bases and
                                Zhaga
                                bases, and fits with all external controllers, motion sensors, and external light
                                sensors.</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="">
                        <ul>
                            <li>SWIFT SERIES makes an affordable LED road lighting solution.</li>
                            <li>The SWIFT SERIES street light family provides your city with a flexible lighting system
                                which
                                can be deployed anywhere in urban spaces, highways and rural areas.</li>
                            <li>This model is an IP66 protection level, anti-collision level IK08, and IK09
                                anti-collision
                                level can be customized.</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="light">
                        <ul>
                            <li>SWIFT SERIES makes an affordable LED road lighting solution.</li>
                            <li>The SWIFT SERIES street light family provides your city with a flexible lighting system
                                which
                                can be deployed anywhere in urban spaces, highways and rural areas.</li>
                            <li>This model is an IP66 protection level, anti-collision level IK08, and IK09
                                anti-collision
                                level can be customized.</li>
                            <li>As it support changing the lens angle, it can achieve different light distribution types
                                for
                                different projects.</li>
                            <li>This model is compatible with built-in light sensors, installation of NEMA bases and
                                Zhaga
                                bases, and fits with all external controllers, motion sensors, and external light
                                sensors.</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="specs">
                        <ul>
                            <li>As it support changing the lens angle, it can achieve different light distribution types
                                for
                                different projects.</li>
                            <li>This model is compatible with built-in light sensors, installation of NEMA bases and
                                Zhaga
                                bases, and fits with all external controllers, motion sensors, and external light
                                sensors.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="table-responsive">
                    <table border="5" cellpadding="0" cellspacing="0" style="height: 600px; width: 1300px;"
                        class="table table-bordered">
                        <tbody>
                            <tr>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><span
                                        style="font-size:18px;"><strong><span
                                                style="font-family:Arial,Helvetica,sans-serif;">Model</span></strong></span>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><span
                                        style="font-size:18px;"><strong><span
                                                style="font-family:Arial,Helvetica,sans-serif;">Wattage</span></strong></span>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><span
                                        style="font-size:18px;"><strong><span
                                                style="font-family:Arial,Helvetica,sans-serif;">Voltage</span></strong></span>
                                </td>
                                <td style="border-color: rgb(0, 0, 0);">
                                    <div style="text-align: center;"><span style="font-size:18px;"><strong><span
                                                    style="font-family:Arial,Helvetica,sans-serif;">Efficiency</span></strong></span>
                                    </div>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><span
                                        style="font-size:18px;"><strong><span
                                                style="font-family:Arial,Helvetica,sans-serif;">RA</span></strong></span>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><span
                                        style="font-size:18px;"><strong><span
                                                style="font-family:Arial,Helvetica,sans-serif;">CCT</span></strong></span>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><span
                                        style="font-size:18px;"><strong><span
                                                style="font-family:Arial,Helvetica,sans-serif;">Beam
                                                Angle</span></strong></span></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><span
                                        style="font-size:18px;"><strong><span
                                                style="font-family:Arial,Helvetica,sans-serif;">PF</span></strong></span>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><span
                                        style="font-size:18px;"><strong><span
                                                style="font-family:Arial,Helvetica,sans-serif;">IP</span></strong></span>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><span
                                        style="font-size:18px;"><strong><span
                                                style="font-family:Arial,Helvetica,sans-serif;">IK</span></strong></span>
                                </td>
                                <td style="border-color: rgb(0, 0, 0);">
                                    <div style="text-align: center;"><span style="font-size:18px;"><strong><span
                                                    style="font-family:Arial,Helvetica,sans-serif;">Material Of Shell
                                                </span></strong></span></div>
                                </td>
                                <td style="border-color: rgb(0, 0, 0);">
                                    <div style="text-align: center;"><span style="font-size:18px;"><strong><span
                                                    style="font-family:Arial,Helvetica,sans-serif;">Material Of
                                                    Lens</span></strong></span></div>
                                </td>
                                <td style="border-color: rgb(0, 0, 0);">
                                    <div style="text-align: center;"><span style="font-size:18px;"><strong><span
                                                    style="font-family:Arial,Helvetica,sans-serif;">Pole diameter<br>
                                                    (mm)</span></strong></span></div>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><span
                                        style="font-size:18px;"><strong><span
                                                style="font-family:Arial,Helvetica,sans-serif;">Dimension（mm）</span></strong></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><span
                                        style="font-size:18px;"><strong><span
                                                style="font-family:Arial,Helvetica,sans-serif;">ASL11-A</span></strong></span>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">10-60W</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">&nbsp;AC85-305V<br>
                                                AC450-480V</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">210LM/W</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">&nbsp;&gt;70|80|90&nbsp;</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">&nbsp;2400K|2700K|3000K|<br>
                                                4000K|5000K|6500k&nbsp;</span></span></strong></td>
                                <td style="border-color: rgb(0, 0, 0);">
                                    <div style="text-align: center;"><strong><span style="font-size:14px;"><span
                                                    style="font-family:Arial,Helvetica,sans-serif;">Type I | Type II |
                                                    Type III</span></span></strong></div>
                                </td>
                                <td style="border-color: rgb(0, 0, 0); text-align: center;"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">≥0.95</span></span></strong>
                                </td>
                                <td style="border-color: rgb(0, 0, 0);">
                                    <div style="text-align: center;"><strong><span style="font-size:14px;"><span
                                                    style="font-family:Arial,Helvetica,sans-serif;">IP65|IP66|
                                                    IP67</span></span></strong></div>
                                </td>
                                <td style="border-color: rgb(0, 0, 0);">
                                    <div style="text-align: center;"><strong><span style="font-size:14px;"><span
                                                    style="font-family:Arial,Helvetica,sans-serif;">IK08|IK09|
                                                    IK10</span></span></strong></div>
                                </td>
                                <td style="border-color: rgb(0, 0, 0);">
                                    <div style="text-align: center;"><strong><span style="font-size:14px;"><span
                                                    style="font-family:Arial,Helvetica,sans-serif;">Aluminum (ADC12)
                                                    +Optical Glass</span></span></strong></div>
                                </td>
                                <td style="border-color: rgb(0, 0, 0);">
                                    <div style="text-align: center;"><strong><span style="font-size:14px;"><span
                                                    style="font-family:Arial,Helvetica,sans-serif;">PMMA |
                                                    PC</span></span></strong></div>
                                </td>
                                <td style="border-color: rgb(0, 0, 0);">
                                    <div style="text-align: center;"><strong><span style="font-size:14px;"><span
                                                    style="font-family:Arial,Helvetica,sans-serif;">A:φ 50<br>
                                                    BCDE:φ 60</span></span></strong></div>
                                </td>
                                <td style="border-color: rgb(0, 0, 0);">
                                    <div style="text-align: center;"><strong><span style="font-size:14px;"><span
                                                    style="font-family:Arial,Helvetica,sans-serif;">522*197*136</span></span></strong>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><span
                                        style="font-size:18px;"><strong><span
                                                style="font-family:Arial,Helvetica,sans-serif;">ASL11-B</span></strong></span>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">&nbsp;40W-80W&nbsp;</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">AC85-305V<br>
                                                AC450-480V</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">210LM/W</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">&gt;70|80|90</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">&nbsp;2400K|2700K|3000K|<br>
                                                4000K|5000K|6500k&nbsp;</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">Type I | Type II | Type
                                                III</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">≥0.95</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">IP65|IP66|
                                                IP67</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">IK08|IK09|
                                                IK10</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">Aluminum (ADC12)
                                                +Optical Glass</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">PMMA |
                                                PC</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">A:φ 50<br>
                                                BCDE:φ 60</span></span></strong></td>
                                <td style="border-color: rgb(0, 0, 0);">
                                    <div style="text-align: center;"><strong><span style="font-size:14px;"><span
                                                    style="font-family:Arial,Helvetica,sans-serif;">600*245*155</span></span></strong>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><span
                                        style="font-size:18px;"><strong><span
                                                style="font-family:Arial,Helvetica,sans-serif;">ASL11-C</span></strong></span>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">80W-120W</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">AC85-305V<br>
                                                AC450-480V</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">210LM/W</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">&gt;70|80|90</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">&nbsp;2400K|2700K|3000K|<br>
                                                4000K|5000K|6500k&nbsp;</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">Type I | Type II | Type
                                                III</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">≥0.95</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">IP65|IP66|
                                                IP67</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">IK08|IK09|
                                                IK10</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">Aluminum (ADC12)
                                                +Optical Glass</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">PMMA |
                                                PC</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">A:φ 50<br>
                                                BCDE:φ 60</span></span></strong></td>
                                <td style="border-color: rgb(0, 0, 0);">
                                    <div style="text-align: center;"><strong><span style="font-size:14px;"><span
                                                    style="font-family:Arial,Helvetica,sans-serif;">636*290*155</span></span></strong>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><span
                                        style="font-size:18px;"><strong><span
                                                style="font-family:Arial,Helvetica,sans-serif;">ASL11-D</span></strong></span>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">120W-200W</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">AC85-305V<br>
                                                AC450-480V</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">210LM/W</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">&gt;70|80|90</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">2400K|2700K|3000K|<br>
                                                4000K|5000K|6500k&nbsp;</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">Type I | Type II | Type
                                                III</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">≥0.95</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">IP65|IP66|
                                                IP67</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">IK08|IK09|
                                                IK10</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">Aluminum (ADC12)
                                                +Optical Glass</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">PMMA |
                                                PC</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">A:φ 50<br>
                                                BCDE:φ 60</span></span></strong></td>
                                <td style="border-color: rgb(0, 0, 0); text-align: center;"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">686*290*155</span></span></strong>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><span
                                        style="font-size:18px;"><strong><span
                                                style="font-family:Arial,Helvetica,sans-serif;">ASL11-E</span></strong></span>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">200W-240W</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">AC85-305V<br>
                                                AC450-480V</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">210LM/W</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">&gt;70|80|90</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">2400K|2700K|3000K|<br>
                                                4000K|5000K|6500k&nbsp;</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">Type I | Type II | Type
                                                III</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">≥0.95</span></span></strong>
                                </td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">IP65|IP66|
                                                IP67</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">IK08|IK09|
                                                IK10</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">Aluminum (ADC12)
                                                +Optical Glass</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">PMMA |
                                                PC</span></span></strong></td>
                                <td style="text-align: center; border-color: rgb(0, 0, 0);"><strong><span
                                            style="font-size:14px;"><span
                                                style="font-family:Arial,Helvetica,sans-serif;">A:φ 50<br>
                                                BCDE:φ 60</span></span></strong></td>
                                <td style="border-color: rgb(0, 0, 0); text-align: center;"><strong>760*310*155</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="product_download">
            <div class="download_name">SPECS SHEET</div>
            <div class="download_box">
                <div class="download_item">
                    <img src="https://asset.site.joinf.com/alite/images/pdf.png" alt="">
                    <div class="download_name">ASL11 SWIFT SERIES from Alite Lighting.pdf</div>
                    <a class="download"
                        href="https://site-1306369054.file.myqcloud.com/5152309090116776/2022/08/Z3zfKSZGrb.pdf"
                        data-file="https://site-1306369054.file.myqcloud.com/5152309090116776/2022/08/Z3zfKSZGrb.pdf">Download
                        PDF</a>
                </div>
                <div class="download_item">
                    <img src="https://asset.site.joinf.com/alite/images/pdf.png" alt="">
                    <div class="download_name">2022 LED Street Lights catalogue from Alite.pdf</div>
                    <a class="download"
                        href="https://site-1306369054.file.myqcloud.com/5152309090116776/2022/08/3TGww4RX3r.pdf"
                        data-file="https://site-1306369054.file.myqcloud.com/5152309090116776/2022/08/3TGww4RX3r.pdf">Download
                        PDF</a>
                </div>
                <div class="download_item">
                    <img src="https://asset.site.joinf.com/alite/images/pdf.png" alt="">
                    <div class="download_name">SWIFT150W(ASL11-D).pdf</div>
                    <a class="download"
                        href="https://site-1306369054.file.myqcloud.com/5152309090116776/2022/08/wF5W3iMjK4.pdf"
                        data-file="https://site-1306369054.file.myqcloud.com/5152309090116776/2022/08/wF5W3iMjK4.pdf">Download
                        PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function changeImage(newSrc) {
    document.getElementById('mainImage').src = newSrc;
}
</script>

@endsection