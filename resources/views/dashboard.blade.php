@extends('layout')
@section('content')

    <main class="page-content ">

      <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
        <div class="col ">
          <div class="card rounded-4 dash-card ">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="">
                  <p class="mb-1">Total Job Postings</p>
                  <h4 class="mb-0">5.8K</h4>
                  <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>22.5% from last week</span></p>
                </div>
                <div class="ms-auto widget-icon bg-primary text-white">
                  <i class="bi bi-basket2"></i>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card dash-card rounded-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="">
                  <p class="mb-1">Total Active Jobs</p>
                  <h4 class="mb-0">978</h4>
                  <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>13.2% from last week</span></p>
                </div>
                <div class="ms-auto widget-icon bg-success text-white">
                  <i class="bi bi-currency-dollar"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card rounded-4 dash-card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="">
                  <p class="mb-1">Total Active Applicants</p>
                  <h4 class="mb-0">1200</h4>
                  <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>12.3% from last week</span></p>
                </div>
                <div class="ms-auto widget-icon bg-orange text-white">
                  <i class="bi bi-emoji-heart-eyes"></i>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>

      <div class="row">
        <div class="col-12 col-lg-8 col-xl-8 d-flex">
          <div class="card w-100 rounded-4">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <h6 class="mb-0">Jobs Vs Application</h6>

              </div>
              <div class="d-flex align-items-center gap-3">
                <div class="">
                  <h4 class="text-success mb-0">9,279</h4>
                  <p class="mb-0">Applications</p>
                </div>
                <div class="vr"></div>
                <div class="">
                  <h4 class="text-pink mb-0">5,629</h4>
                  <p class="mb-0">Jobs Available</p>
                </div>
              </div>
              <div id="chart1">
                <div id="apexcharts1haw2ra1"
                  class="apexcharts-canvas apexcharts1haw2ra1 apexcharts-theme-light apexcharts-zoomable"
                  style="width: 767px; height: 350px;"><svg id="SvgjsSvg5631" width="767" height="350"
                    xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                    transform="translate(0, 0)" style="background: transparent;">
                    <foreignObject x="0" y="0" width="767" height="350">
                      <div class="apexcharts-legend apexcharts-align-center position-bottom"
                        xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 5px; position: absolute;">
                        <div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 0px 5px;">
                          <span class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                            style="background: rgb(2, 186, 90); color: rgb(2, 186, 90); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                            class="apexcharts-legend-text" rel="1" i="0" data:default-text="Revenue"
                            data:collapsed="false"
                            style="color: rgb(78, 78, 78); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Applications</span>
                        </div>
                        <div class="apexcharts-legend-series" rel="2" data:collapsed="false" style="margin: 0px 5px;">
                          <span class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                            style="background: rgb(231, 46, 122); color: rgb(231, 46, 122); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                            class="apexcharts-legend-text" rel="2" i="1" data:default-text="Investment"
                            data:collapsed="false"
                            style="color: rgb(78, 78, 78); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Jobs Available</span>
                        </div>
                      </div>
                      <style type="text/css">
                        .apexcharts-legend {
                          display: flex;
                          overflow: auto;
                          padding: 0 10px;
                        }

                        .apexcharts-legend.position-bottom,
                        .apexcharts-legend.position-top {
                          flex-wrap: wrap
                        }

                        .apexcharts-legend.position-right,
                        .apexcharts-legend.position-left {
                          flex-direction: column;
                          bottom: 0;
                        }

                        .apexcharts-legend.position-bottom.apexcharts-align-left,
                        .apexcharts-legend.position-top.apexcharts-align-left,
                        .apexcharts-legend.position-right,
                        .apexcharts-legend.position-left {
                          justify-content: flex-start;
                        }

                        .apexcharts-legend.position-bottom.apexcharts-align-center,
                        .apexcharts-legend.position-top.apexcharts-align-center {
                          justify-content: center;
                        }

                        .apexcharts-legend.position-bottom.apexcharts-align-right,
                        .apexcharts-legend.position-top.apexcharts-align-right {
                          justify-content: flex-end;
                        }

                        .apexcharts-legend-series {
                          cursor: pointer;
                          line-height: normal;
                        }

                        .apexcharts-legend.position-bottom .apexcharts-legend-series,
                        .apexcharts-legend.position-top .apexcharts-legend-series {
                          display: flex;
                          align-items: center;
                        }

                        .apexcharts-legend-text {
                          position: relative;
                          font-size: 14px;
                        }

                        .apexcharts-legend-text *,
                        .apexcharts-legend-marker * {
                          pointer-events: none;
                        }

                        .apexcharts-legend-marker {
                          position: relative;
                          display: inline-block;
                          cursor: pointer;
                          margin-right: 3px;
                          border-style: solid;
                        }

                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                        .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                          display: inline-block;
                        }

                        .apexcharts-legend-series.apexcharts-no-click {
                          cursor: auto;
                        }

                        .apexcharts-legend .apexcharts-hidden-zero-series,
                        .apexcharts-legend .apexcharts-hidden-null-series {
                          display: none !important;
                        }

                        .apexcharts-inactive-legend {
                          opacity: 0.45;
                        }
                      </style>
                    </foreignObject>
                    <g id="SvgjsG5633" class="apexcharts-inner apexcharts-graphical"
                      transform="translate(46.86250114440918, 40)">
                      <defs id="SvgjsDefs5632">
                        <clipPath id="gridRectMask1haw2ra1">
                          <rect id="SvgjsRect5639" width="705.712498664856" height="262.99519938278195" x="-4" y="-2"
                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                          </rect>
                        </clipPath>
                        <clipPath id="gridRectMarkerMask1haw2ra1">
                          <rect id="SvgjsRect5640" width="701.712498664856" height="262.99519938278195" x="-2" y="-2"
                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                          </rect>
                        </clipPath>
                        <linearGradient id="SvgjsLinearGradient5646" x1="0" y1="0" x2="0" y2="1">
                          <stop id="SvgjsStop5647" stop-opacity="0.65" stop-color="rgba(2,186,90,0.65)" offset="0">
                          </stop>
                          <stop id="SvgjsStop5648" stop-opacity="0.5" stop-color="rgba(129,221,173,0.5)" offset="1">
                          </stop>
                          <stop id="SvgjsStop5649" stop-opacity="0.5" stop-color="rgba(129,221,173,0.5)" offset="1">
                          </stop>
                        </linearGradient>
                        <linearGradient id="SvgjsLinearGradient5656" x1="0" y1="0" x2="0" y2="1">
                          <stop id="SvgjsStop5657" stop-opacity="0.65" stop-color="rgba(231,46,122,0.65)" offset="0">
                          </stop>
                          <stop id="SvgjsStop5658" stop-opacity="0.5" stop-color="rgba(243,151,189,0.5)" offset="1">
                          </stop>
                          <stop id="SvgjsStop5659" stop-opacity="0.5" stop-color="rgba(243,151,189,0.5)" offset="1">
                          </stop>
                        </linearGradient>
                      </defs>
                      <line id="SvgjsLine5638" x1="697.2124986648561" y1="0" x2="697.2124986648561"
                        y2="258.99519938278195" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs"
                        x="697.2124986648561" y="0" width="1" height="258.99519938278195" fill="#b1b9c4" filter="none"
                        fill-opacity="0.9" stroke-width="1"></line>
                      <g id="SvgjsG5661" class="apexcharts-xaxis" transform="translate(0, 0)">
                        <g id="SvgjsG5662" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text
                            id="SvgjsText5664" font-family="Helvetica, Arial, sans-serif" x="0" y="287.99519938278195"
                            text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400"
                            fill="#4e4e4e" class="apexcharts-text apexcharts-xaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan5665">Jan</tspan>
                            <title>Jan</title>
                          </text><text id="SvgjsText5667" font-family="Helvetica, Arial, sans-serif"
                            x="63.428408969532356" y="287.99519938278195" text-anchor="middle" dominant-baseline="auto"
                            font-size="12px" font-weight="400" fill="#4e4e4e"
                            class="apexcharts-text apexcharts-xaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan5668">Feb</tspan>
                            <title>Feb</title>
                          </text><text id="SvgjsText5670" font-family="Helvetica, Arial, sans-serif"
                            x="126.85681793906471" y="287.99519938278195" text-anchor="middle" dominant-baseline="auto"
                            font-size="12px" font-weight="400" fill="#4e4e4e"
                            class="apexcharts-text apexcharts-xaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan5671">Mar</tspan>
                            <title>Mar</title>
                          </text><text id="SvgjsText5673" font-family="Helvetica, Arial, sans-serif"
                            x="190.28522690859708" y="287.99519938278195" text-anchor="middle" dominant-baseline="auto"
                            font-size="12px" font-weight="400" fill="#4e4e4e"
                            class="apexcharts-text apexcharts-xaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan5674">Apr</tspan>
                            <title>Apr</title>
                          </text><text id="SvgjsText5676" font-family="Helvetica, Arial, sans-serif"
                            x="253.71363587812942" y="287.99519938278195" text-anchor="middle" dominant-baseline="auto"
                            font-size="12px" font-weight="400" fill="#4e4e4e"
                            class="apexcharts-text apexcharts-xaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan5677">May</tspan>
                            <title>May</title>
                          </text><text id="SvgjsText5679" font-family="Helvetica, Arial, sans-serif"
                            x="317.1420448476618" y="287.99519938278195" text-anchor="middle" dominant-baseline="auto"
                            font-size="12px" font-weight="400" fill="#4e4e4e"
                            class="apexcharts-text apexcharts-xaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan5680">Jun</tspan>
                            <title>Jun</title>
                          </text><text id="SvgjsText5682" font-family="Helvetica, Arial, sans-serif"
                            x="380.57045381719416" y="287.99519938278195" text-anchor="middle" dominant-baseline="auto"
                            font-size="12px" font-weight="400" fill="#4e4e4e"
                            class="apexcharts-text apexcharts-xaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan5683">Jul</tspan>
                            <title>Jul</title>
                          </text><text id="SvgjsText5685" font-family="Helvetica, Arial, sans-serif"
                            x="443.99886278672653" y="287.99519938278195" text-anchor="middle" dominant-baseline="auto"
                            font-size="12px" font-weight="400" fill="#4e4e4e"
                            class="apexcharts-text apexcharts-xaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan5686">Aug</tspan>
                            <title>Aug</title>
                          </text><text id="SvgjsText5688" font-family="Helvetica, Arial, sans-serif"
                            x="507.4272717562589" y="287.99519938278195" text-anchor="middle" dominant-baseline="auto"
                            font-size="12px" font-weight="400" fill="#4e4e4e"
                            class="apexcharts-text apexcharts-xaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan5689">Sep</tspan>
                            <title>Sep</title>
                          </text><text id="SvgjsText5691" font-family="Helvetica, Arial, sans-serif"
                            x="570.8556807257913" y="287.99519938278195" text-anchor="middle" dominant-baseline="auto"
                            font-size="12px" font-weight="400" fill="#4e4e4e"
                            class="apexcharts-text apexcharts-xaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan5692">Oct</tspan>
                            <title>Oct</title>
                          </text><text id="SvgjsText5694" font-family="Helvetica, Arial, sans-serif"
                            x="634.2840896953237" y="287.99519938278195" text-anchor="middle" dominant-baseline="auto"
                            font-size="12px" font-weight="400" fill="#4e4e4e"
                            class="apexcharts-text apexcharts-xaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan5695">Nov</tspan>
                            <title>Nov</title>
                          </text><text id="SvgjsText5697" font-family="Helvetica, Arial, sans-serif"
                            x="697.7124986648561" y="287.99519938278195" text-anchor="middle" dominant-baseline="auto"
                            font-size="12px" font-weight="400" fill="#4e4e4e"
                            class="apexcharts-text apexcharts-xaxis-label "
                            style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan5698">Dec</tspan>
                            <title>Dec</title>
                          </text></g>
                        <line id="SvgjsLine5699" x1="0" y1="259.99519938278195" x2="697.712498664856"
                          y2="259.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line>
                      </g>
                      <g id="SvgjsG5716" class="apexcharts-grid">
                        <g id="SvgjsG5717" class="apexcharts-gridlines-horizontal">
                          <line id="SvgjsLine5731" x1="0" y1="0" x2="697.712498664856" y2="0"
                            stroke="rgba(0, 0, 0, 0.10)" stroke-dasharray="0" class="apexcharts-gridline"></line>
                          <line id="SvgjsLine5732" x1="0" y1="43.16586656379699" x2="697.712498664856"
                            y2="43.16586656379699" stroke="rgba(0, 0, 0, 0.10)" stroke-dasharray="0"
                            class="apexcharts-gridline"></line>
                          <line id="SvgjsLine5733" x1="0" y1="86.33173312759398" x2="697.712498664856"
                            y2="86.33173312759398" stroke="rgba(0, 0, 0, 0.10)" stroke-dasharray="0"
                            class="apexcharts-gridline"></line>
                          <line id="SvgjsLine5734" x1="0" y1="129.49759969139097" x2="697.712498664856"
                            y2="129.49759969139097" stroke="rgba(0, 0, 0, 0.10)" stroke-dasharray="0"
                            class="apexcharts-gridline"></line>
                          <line id="SvgjsLine5735" x1="0" y1="172.66346625518796" x2="697.712498664856"
                            y2="172.66346625518796" stroke="rgba(0, 0, 0, 0.10)" stroke-dasharray="0"
                            class="apexcharts-gridline"></line>
                          <line id="SvgjsLine5736" x1="0" y1="215.82933281898494" x2="697.712498664856"
                            y2="215.82933281898494" stroke="rgba(0, 0, 0, 0.10)" stroke-dasharray="0"
                            class="apexcharts-gridline"></line>
                          <line id="SvgjsLine5737" x1="0" y1="258.99519938278195" x2="697.712498664856"
                            y2="258.99519938278195" stroke="rgba(0, 0, 0, 0.10)" stroke-dasharray="0"
                            class="apexcharts-gridline"></line>
                        </g>
                        <g id="SvgjsG5718" class="apexcharts-gridlines-vertical"></g>
                        <line id="SvgjsLine5719" x1="0" y1="259.99519938278195" x2="0" y2="265.99519938278195"
                          stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                        <line id="SvgjsLine5720" x1="63.42840896953236" y1="259.99519938278195" x2="63.42840896953236"
                          y2="265.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick">
                        </line>
                        <line id="SvgjsLine5721" x1="126.85681793906473" y1="259.99519938278195" x2="126.85681793906473"
                          y2="265.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick">
                        </line>
                        <line id="SvgjsLine5722" x1="190.28522690859708" y1="259.99519938278195" x2="190.28522690859708"
                          y2="265.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick">
                        </line>
                        <line id="SvgjsLine5723" x1="253.71363587812945" y1="259.99519938278195" x2="253.71363587812945"
                          y2="265.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick">
                        </line>
                        <line id="SvgjsLine5724" x1="317.1420448476618" y1="259.99519938278195" x2="317.1420448476618"
                          y2="265.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick">
                        </line>
                        <line id="SvgjsLine5725" x1="380.57045381719416" y1="259.99519938278195" x2="380.57045381719416"
                          y2="265.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick">
                        </line>
                        <line id="SvgjsLine5726" x1="443.99886278672653" y1="259.99519938278195" x2="443.99886278672653"
                          y2="265.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick">
                        </line>
                        <line id="SvgjsLine5727" x1="507.4272717562589" y1="259.99519938278195" x2="507.4272717562589"
                          y2="265.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick">
                        </line>
                        <line id="SvgjsLine5728" x1="570.8556807257912" y1="259.99519938278195" x2="570.8556807257912"
                          y2="265.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick">
                        </line>
                        <line id="SvgjsLine5729" x1="634.2840896953236" y1="259.99519938278195" x2="634.2840896953236"
                          y2="265.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick">
                        </line>
                        <line id="SvgjsLine5730" x1="697.712498664856" y1="259.99519938278195" x2="697.712498664856"
                          y2="265.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick">
                        </line>
                        <line id="SvgjsLine5739" x1="0" y1="258.99519938278195" x2="697.712498664856"
                          y2="258.99519938278195" stroke="transparent" stroke-dasharray="0"></line>
                        <line id="SvgjsLine5738" x1="0" y1="1" x2="0" y2="258.99519938278195" stroke="transparent"
                          stroke-dasharray="0">
                        </line>
                      </g>
                      <g id="SvgjsG5642" class="apexcharts-area-series apexcharts-plot-series">
                        <g id="SvgjsG5643" class="apexcharts-series" seriesName="Revenue" data:longestSeries="true"
                          rel="1" data:realIndex="0">
                          <path id="SvgjsPath5650"
                            d="M 0 258.99519938278195L 0 194.24639953708646C 22.199943139336327 194.24639953708646 41.228465830196036 129.49759969139097 63.42840896953236 129.49759969139097C 85.62835210886868 129.49759969139097 104.6568747997284 222.30421280355452 126.85681793906473 222.30421280355452C 149.05676107840105 222.30421280355452 168.08528376926077 151.08053297328948 190.2852269085971 151.08053297328948C 212.48517004793342 151.08053297328948 231.51369273879314 213.67103949079512 253.71363587812945 213.67103949079512C 275.9135790174658 213.67103949079512 294.94210170832554 90.6483197839737 317.14204484766185 90.6483197839737C 339.34198798699816 90.6483197839737 358.3705106778579 187.7715195525169 380.5704538171942 187.7715195525169C 402.77039695653053 187.7715195525169 421.7989196473903 215.82933281898497 443.9988627867266 215.82933281898497C 466.1988059260629 215.82933281898497 485.2273286169226 159.71370628604888 507.4272717562589 159.71370628604888C 529.6272148955952 159.71370628604888 548.655737586455 140.28906633234024 570.8556807257913 140.28906633234024C 593.0556238651277 140.28906633234024 612.0841465559873 183.45493289613722 634.2840896953237 183.45493289613722C 656.4840328346601 183.45493289613722 675.5125555255197 172.66346625518798 697.7124986648561 172.66346625518798C 697.7124986648561 172.66346625518798 697.7124986648561 172.66346625518798 697.7124986648561 258.99519938278195M 697.7124986648561 172.66346625518798z"
                            fill="url(#SvgjsLinearGradient5646)" fill-opacity="1" stroke-opacity="1"
                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area"
                            index="0" clip-path="url(#gridRectMask1haw2ra1)"
                            pathTo="M 0 258.99519938278195L 0 194.24639953708646C 22.199943139336327 194.24639953708646 41.228465830196036 129.49759969139097 63.42840896953236 129.49759969139097C 85.62835210886868 129.49759969139097 104.6568747997284 222.30421280355452 126.85681793906473 222.30421280355452C 149.05676107840105 222.30421280355452 168.08528376926077 151.08053297328948 190.2852269085971 151.08053297328948C 212.48517004793342 151.08053297328948 231.51369273879314 213.67103949079512 253.71363587812945 213.67103949079512C 275.9135790174658 213.67103949079512 294.94210170832554 90.6483197839737 317.14204484766185 90.6483197839737C 339.34198798699816 90.6483197839737 358.3705106778579 187.7715195525169 380.5704538171942 187.7715195525169C 402.77039695653053 187.7715195525169 421.7989196473903 215.82933281898497 443.9988627867266 215.82933281898497C 466.1988059260629 215.82933281898497 485.2273286169226 159.71370628604888 507.4272717562589 159.71370628604888C 529.6272148955952 159.71370628604888 548.655737586455 140.28906633234024 570.8556807257913 140.28906633234024C 593.0556238651277 140.28906633234024 612.0841465559873 183.45493289613722 634.2840896953237 183.45493289613722C 656.4840328346601 183.45493289613722 675.5125555255197 172.66346625518798 697.7124986648561 172.66346625518798C 697.7124986648561 172.66346625518798 697.7124986648561 172.66346625518798 697.7124986648561 258.99519938278195M 697.7124986648561 172.66346625518798z"
                            pathFrom="M -1 302.16106594657896L -1 302.16106594657896L 63.42840896953236 302.16106594657896L 126.85681793906473 302.16106594657896L 190.2852269085971 302.16106594657896L 253.71363587812945 302.16106594657896L 317.14204484766185 302.16106594657896L 380.5704538171942 302.16106594657896L 443.9988627867266 302.16106594657896L 507.4272717562589 302.16106594657896L 570.8556807257913 302.16106594657896L 634.2840896953237 302.16106594657896L 697.7124986648561 302.16106594657896">
                          </path>
                          <path id="SvgjsPath5651"
                            d="M 0 194.24639953708646C 22.199943139336327 194.24639953708646 41.228465830196036 129.49759969139097 63.42840896953236 129.49759969139097C 85.62835210886868 129.49759969139097 104.6568747997284 222.30421280355452 126.85681793906473 222.30421280355452C 149.05676107840105 222.30421280355452 168.08528376926077 151.08053297328948 190.2852269085971 151.08053297328948C 212.48517004793342 151.08053297328948 231.51369273879314 213.67103949079512 253.71363587812945 213.67103949079512C 275.9135790174658 213.67103949079512 294.94210170832554 90.6483197839737 317.14204484766185 90.6483197839737C 339.34198798699816 90.6483197839737 358.3705106778579 187.7715195525169 380.5704538171942 187.7715195525169C 402.77039695653053 187.7715195525169 421.7989196473903 215.82933281898497 443.9988627867266 215.82933281898497C 466.1988059260629 215.82933281898497 485.2273286169226 159.71370628604888 507.4272717562589 159.71370628604888C 529.6272148955952 159.71370628604888 548.655737586455 140.28906633234024 570.8556807257913 140.28906633234024C 593.0556238651277 140.28906633234024 612.0841465559873 183.45493289613722 634.2840896953237 183.45493289613722C 656.4840328346601 183.45493289613722 675.5125555255197 172.66346625518798 697.7124986648561 172.66346625518798"
                            fill="none" fill-opacity="1" stroke="#02ba5a" stroke-opacity="1" stroke-linecap="butt"
                            stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0"
                            clip-path="url(#gridRectMask1haw2ra1)"
                            pathTo="M 0 194.24639953708646C 22.199943139336327 194.24639953708646 41.228465830196036 129.49759969139097 63.42840896953236 129.49759969139097C 85.62835210886868 129.49759969139097 104.6568747997284 222.30421280355452 126.85681793906473 222.30421280355452C 149.05676107840105 222.30421280355452 168.08528376926077 151.08053297328948 190.2852269085971 151.08053297328948C 212.48517004793342 151.08053297328948 231.51369273879314 213.67103949079512 253.71363587812945 213.67103949079512C 275.9135790174658 213.67103949079512 294.94210170832554 90.6483197839737 317.14204484766185 90.6483197839737C 339.34198798699816 90.6483197839737 358.3705106778579 187.7715195525169 380.5704538171942 187.7715195525169C 402.77039695653053 187.7715195525169 421.7989196473903 215.82933281898497 443.9988627867266 215.82933281898497C 466.1988059260629 215.82933281898497 485.2273286169226 159.71370628604888 507.4272717562589 159.71370628604888C 529.6272148955952 159.71370628604888 548.655737586455 140.28906633234024 570.8556807257913 140.28906633234024C 593.0556238651277 140.28906633234024 612.0841465559873 183.45493289613722 634.2840896953237 183.45493289613722C 656.4840328346601 183.45493289613722 675.5125555255197 172.66346625518798 697.7124986648561 172.66346625518798"
                            pathFrom="M -1 302.16106594657896L -1 302.16106594657896L 63.42840896953236 302.16106594657896L 126.85681793906473 302.16106594657896L 190.2852269085971 302.16106594657896L 253.71363587812945 302.16106594657896L 317.14204484766185 302.16106594657896L 380.5704538171942 302.16106594657896L 443.9988627867266 302.16106594657896L 507.4272717562589 302.16106594657896L 570.8556807257913 302.16106594657896L 634.2840896953237 302.16106594657896L 697.7124986648561 302.16106594657896">
                          </path>
                          <g id="SvgjsG5644" class="apexcharts-series-markers-wrap" data:realIndex="0">
                            <g class="apexcharts-series-markers">
                              <circle id="SvgjsCircle5745" r="0" cx="697.7124986648561" cy="172.66346625518798"
                                class="apexcharts-marker wvxfjlkbr" stroke="#ffffff" fill="#02ba5a" fill-opacity="1"
                                stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                            </g>
                          </g>
                        </g>
                      </g>
                      <g id="SvgjsG5652" class="apexcharts-line-series apexcharts-plot-series">
                        <g id="SvgjsG5653" class="apexcharts-series" seriesName="Investment" data:longestSeries="true"
                          rel="1" data:realIndex="1">
                          <path id="SvgjsPath5660"
                            d="M 0 151.08053297328948C 22.199943139336327 151.08053297328948 41.228465830196036 105.75637308130263 63.42840896953236 105.75637308130263C 85.62835210886868 105.75637308130263 104.6568747997284 215.82933281898497 126.85681793906473 215.82933281898497C 149.05676107840105 215.82933281898497 168.08528376926077 140.28906633234024 190.2852269085971 140.28906633234024C 212.48517004793342 140.28906633234024 231.51369273879314 194.24639953708646 253.71363587812945 194.24639953708646C 275.9135790174658 194.24639953708646 294.94210170832554 43.16586656379701 317.14204484766185 43.16586656379701C 339.34198798699816 43.16586656379701 358.3705106778579 174.82175958337783 380.5704538171942 174.82175958337783C 402.77039695653053 174.82175958337783 421.7989196473903 187.7715195525169 443.9988627867266 187.7715195525169C 466.1988059260629 187.7715195525169 485.2273286169226 127.33930636320113 507.4272717562589 127.33930636320113C 529.6272148955952 127.33930636320113 548.655737586455 86.33173312759399 570.8556807257913 86.33173312759399C 593.0556238651277 86.33173312759399 612.0841465559873 129.49759969139097 634.2840896953237 129.49759969139097C 656.4840328346601 129.49759969139097 675.5125555255197 97.12319976854323 697.7124986648561 97.12319976854323"
                            fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient5656)" stroke-opacity="1"
                            stroke-linecap="butt" stroke-width="4" stroke-dasharray="3" class="apexcharts-line"
                            index="1" clip-path="url(#gridRectMask1haw2ra1)"
                            pathTo="M 0 151.08053297328948C 22.199943139336327 151.08053297328948 41.228465830196036 105.75637308130263 63.42840896953236 105.75637308130263C 85.62835210886868 105.75637308130263 104.6568747997284 215.82933281898497 126.85681793906473 215.82933281898497C 149.05676107840105 215.82933281898497 168.08528376926077 140.28906633234024 190.2852269085971 140.28906633234024C 212.48517004793342 140.28906633234024 231.51369273879314 194.24639953708646 253.71363587812945 194.24639953708646C 275.9135790174658 194.24639953708646 294.94210170832554 43.16586656379701 317.14204484766185 43.16586656379701C 339.34198798699816 43.16586656379701 358.3705106778579 174.82175958337783 380.5704538171942 174.82175958337783C 402.77039695653053 174.82175958337783 421.7989196473903 187.7715195525169 443.9988627867266 187.7715195525169C 466.1988059260629 187.7715195525169 485.2273286169226 127.33930636320113 507.4272717562589 127.33930636320113C 529.6272148955952 127.33930636320113 548.655737586455 86.33173312759399 570.8556807257913 86.33173312759399C 593.0556238651277 86.33173312759399 612.0841465559873 129.49759969139097 634.2840896953237 129.49759969139097C 656.4840328346601 129.49759969139097 675.5125555255197 97.12319976854323 697.7124986648561 97.12319976854323"
                            pathFrom="M -1 302.16106594657896L -1 302.16106594657896L 63.42840896953236 302.16106594657896L 126.85681793906473 302.16106594657896L 190.2852269085971 302.16106594657896L 253.71363587812945 302.16106594657896L 317.14204484766185 302.16106594657896L 380.5704538171942 302.16106594657896L 443.9988627867266 302.16106594657896L 507.4272717562589 302.16106594657896L 570.8556807257913 302.16106594657896L 634.2840896953237 302.16106594657896L 697.7124986648561 302.16106594657896">
                          </path>
                          <g id="SvgjsG5654" class="apexcharts-series-markers-wrap" data:realIndex="1">
                            <g class="apexcharts-series-markers">
                              <circle id="SvgjsCircle5746" r="0" cx="697.7124986648561" cy="97.12319976854323"
                                class="apexcharts-marker wajviffl6" stroke="#ffffff" fill="#e72e7a" fill-opacity="1"
                                stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                            </g>
                          </g>
                          <g id="SvgjsG5655" class="apexcharts-datalabels" data:realIndex="1"></g>
                        </g>
                        <g id="SvgjsG5645" class="apexcharts-datalabels" data:realIndex="0"></g>
                      </g>
                      <line id="SvgjsLine5740" x1="0" y1="0" x2="697.712498664856" y2="0" stroke="#b6b6b6"
                        stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                      <line id="SvgjsLine5741" x1="0" y1="0" x2="697.712498664856" y2="0" stroke-dasharray="0"
                        stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                      <g id="SvgjsG5742" class="apexcharts-yaxis-annotations"></g>
                      <g id="SvgjsG5743" class="apexcharts-xaxis-annotations"></g>
                      <g id="SvgjsG5744" class="apexcharts-point-annotations"></g>
                      <rect id="SvgjsRect5747" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect">
                      </rect>
                      <rect id="SvgjsRect5748" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                        class="apexcharts-selection-rect"></rect>
                    </g>
                    <rect id="SvgjsRect5637" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                      stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                    <g id="SvgjsG5700" class="apexcharts-yaxis" rel="0" transform="translate(16.86250114440918, 0)">
                      <g id="SvgjsG5701" class="apexcharts-yaxis-texts-g"><text id="SvgjsText5702"
                          font-family="Helvetica, Arial, sans-serif" x="20" y="41.6" text-anchor="end"
                          dominant-baseline="auto" font-size="11px" font-weight="400" fill="#4e4e4e"
                          class="apexcharts-text apexcharts-yaxis-label "
                          style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan5703">140</tspan>
                        </text><text id="SvgjsText5704" font-family="Helvetica, Arial, sans-serif" x="20"
                          y="84.76586656379698" text-anchor="end" dominant-baseline="auto" font-size="11px"
                          font-weight="400" fill="#4e4e4e" class="apexcharts-text apexcharts-yaxis-label "
                          style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan5705">120</tspan>
                        </text><text id="SvgjsText5706" font-family="Helvetica, Arial, sans-serif" x="20"
                          y="127.93173312759396" text-anchor="end" dominant-baseline="auto" font-size="11px"
                          font-weight="400" fill="#4e4e4e" class="apexcharts-text apexcharts-yaxis-label "
                          style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan5707">100</tspan>
                        </text><text id="SvgjsText5708" font-family="Helvetica, Arial, sans-serif" x="20"
                          y="171.09759969139094" text-anchor="end" dominant-baseline="auto" font-size="11px"
                          font-weight="400" fill="#4e4e4e" class="apexcharts-text apexcharts-yaxis-label "
                          style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan5709">80</tspan>
                        </text><text id="SvgjsText5710" font-family="Helvetica, Arial, sans-serif" x="20"
                          y="214.26346625518792" text-anchor="end" dominant-baseline="auto" font-size="11px"
                          font-weight="400" fill="#4e4e4e" class="apexcharts-text apexcharts-yaxis-label "
                          style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan5711">60</tspan>
                        </text><text id="SvgjsText5712" font-family="Helvetica, Arial, sans-serif" x="20"
                          y="257.4293328189849" text-anchor="end" dominant-baseline="auto" font-size="11px"
                          font-weight="400" fill="#4e4e4e" class="apexcharts-text apexcharts-yaxis-label "
                          style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan5713">40</tspan>
                        </text><text id="SvgjsText5714" font-family="Helvetica, Arial, sans-serif" x="20"
                          y="300.5951993827819" text-anchor="end" dominant-baseline="auto" font-size="11px"
                          font-weight="400" fill="#4e4e4e" class="apexcharts-text apexcharts-yaxis-label "
                          style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan5715">20</tspan>
                        </text></g>
                    </g>
                    <g id="SvgjsG5634" class="apexcharts-annotations"></g>
                  </svg>
                  <div class="apexcharts-tooltip apexcharts-theme-dark" style="left: 604.688px; top: 175.663px;">
                    <div class="apexcharts-tooltip-title"
                      style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Dec</div>
                    <div class="apexcharts-tooltip-series-group apexcharts-active" style="display: flex;"><span
                        class="apexcharts-tooltip-marker" style="background-color: rgb(2, 186, 90);"></span>
                      <div class="apexcharts-tooltip-text"
                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Revenue:
                          </span><span class="apexcharts-tooltip-text-value"> 60$</span></div>
                        <div class="apexcharts-tooltip-z-group"><span
                            class="apexcharts-tooltip-text-z-label"></span><span
                            class="apexcharts-tooltip-text-z-value"></span></div>
                      </div>
                    </div>
                    <div class="apexcharts-tooltip-series-group apexcharts-active" style="display: flex;"><span
                        class="apexcharts-tooltip-marker" style="background-color: rgb(231, 46, 122);"></span>
                      <div class="apexcharts-tooltip-text"
                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Investment:
                          </span><span class="apexcharts-tooltip-text-value"> 95$</span></div>
                        <div class="apexcharts-tooltip-z-group"><span
                            class="apexcharts-tooltip-text-z-label"></span><span
                            class="apexcharts-tooltip-text-z-value"></span></div>
                      </div>
                    </div>
                  </div>
                  <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-dark"
                    style="left: 719.831px; top: 300.995px;">
                    <div class="apexcharts-xaxistooltip-text"
                      style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 26.8965px;">Dec
                    </div>
                  </div>
                  <div
                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                    <div class="apexcharts-yaxistooltip-text"></div>
                  </div>
                </div>
              </div>
              <div class="resize-triggers">
                <div class="expand-trigger">
                  <div style="width: 800px;"></div>
                </div>
                <div class="contract-trigger"></div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-12 col-lg-4 col-xl-4 d-flex">
          <div class="card w-100 rounded-4">
            <div class="card-body" style="position: relative; height: 340px">
              <div class="d-flex align-items-center mb-3">
                <h6 class="mb-0">Task Overview</h6>

              </div>
              <div id="chart2" style="min-height: 300.7px;">
                <div id="apexchartshx329u1zi" class="apexcharts-canvas apexchartshx329u1zi apexcharts-theme-light"
                  style="width: 356px; height: 300.7px;"><svg id="SvgjsSvg5749" width="356" height="300.7"
                    xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                    transform="translate(0, 0)" style="background: transparent;">
                    <g id="SvgjsG5751" class="apexcharts-inner apexcharts-graphical" transform="translate(41, 0)">
                      <defs id="SvgjsDefs5750">
                        <clipPath id="gridRectMaskhx329u1zi">
                          <rect id="SvgjsRect5753" width="282" height="300" x="-3" y="-1" rx="0" ry="0" opacity="1"
                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                        </clipPath>
                        <clipPath id="gridRectMarkerMaskhx329u1zi">
                          <rect id="SvgjsRect5754" width="280" height="302" x="-2" y="-2" rx="0" ry="0" opacity="1"
                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                        </clipPath>
                      </defs>
                      <g id="SvgjsG5756" class="apexcharts-radialbar">
                        <g id="SvgjsG5757">
                          <g id="SvgjsG5758" class="apexcharts-tracks">
                            <g id="SvgjsG5759" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                              <path id="apexcharts-radialbarTrack-0"
                                d="M 138 32.37835365853658 A 116.62164634146342 116.62164634146342 0 1 1 137.97964568302578 32.37835543478582"
                                fill="none" fill-opacity="1" stroke="rgba(238,237,251,0.85)" stroke-opacity="1"
                                stroke-linecap="butt" stroke-width="3.581402439024391" stroke-dasharray="0"
                                class="apexcharts-radialbar-area"
                                data:pathOrig="M 138 32.37835365853658 A 116.62164634146342 116.62164634146342 0 1 1 137.97964568302578 32.37835543478582">
                              </path>
                            </g>
                            <g id="SvgjsG5761" class="apexcharts-radialbar-track apexcharts-track" rel="2">
                              <path id="apexcharts-radialbarTrack-1"
                                d="M 138 51.54115853658536 A 97.45884146341464 97.45884146341464 0 1 1 137.98299022339918 51.54116002096839"
                                fill="none" fill-opacity="1" stroke="rgba(238,237,251,0.85)" stroke-opacity="1"
                                stroke-linecap="butt" stroke-width="3.581402439024391" stroke-dasharray="0"
                                class="apexcharts-radialbar-area"
                                data:pathOrig="M 138 51.54115853658536 A 97.45884146341464 97.45884146341464 0 1 1 137.98299022339918 51.54116002096839">
                              </path>
                            </g>
                            <g id="SvgjsG5763" class="apexcharts-radialbar-track apexcharts-track" rel="3">
                              <path id="apexcharts-radialbarTrack-2"
                                d="M 138 70.70396341463413 A 78.29603658536587 78.29603658536587 0 1 1 137.9863347637726 70.70396460715095"
                                fill="none" fill-opacity="1" stroke="rgba(238,237,251,0.85)" stroke-opacity="1"
                                stroke-linecap="butt" stroke-width="3.581402439024391" stroke-dasharray="0"
                                class="apexcharts-radialbar-area"
                                data:pathOrig="M 138 70.70396341463413 A 78.29603658536587 78.29603658536587 0 1 1 137.9863347637726 70.70396460715095">
                              </path>
                            </g>
                          </g>
                          <g id="SvgjsG5765">
                            <g id="SvgjsG5770" class="apexcharts-series apexcharts-radial-series" seriesName="Complete"
                              rel="1" data:realIndex="0">
                              <path id="SvgjsPath5771"
                                d="M 138 32.37835365853658 A 116.62164634146342 116.62164634146342 0 1 1 69.45151618241934 54.6511061977712"
                                fill="none" fill-opacity="0.85" stroke="rgba(137,50,255,0.85)" stroke-opacity="1"
                                stroke-linecap="butt" stroke-width="7.162804878048782" stroke-dasharray="0"
                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="324"
                                data:value="90" index="0" j="0"
                                data:pathOrig="M 138 32.37835365853658 A 116.62164634146342 116.62164634146342 0 1 1 69.45151618241934 54.6511061977712">
                              </path>
                            </g>
                            <g id="SvgjsG5772" class="apexcharts-series apexcharts-radial-series"
                              seriesName="InxProgress" rel="2" data:realIndex="1">
                              <path id="SvgjsPath5773"
                                d="M 138 51.54115853658536 A 97.45884146341464 97.45884146341464 0 1 1 45.31113375564321 118.88356173571108"
                                fill="none" fill-opacity="0.85" stroke="rgba(255,102,50,0.85)" stroke-opacity="1"
                                stroke-linecap="butt" stroke-width="7.162804878048782" stroke-dasharray="0"
                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-1" data:angle="288"
                                data:value="80" index="0" j="1"
                                data:pathOrig="M 138 51.54115853658536 A 97.45884146341464 97.45884146341464 0 1 1 45.31113375564321 118.88356173571108">
                              </path>
                            </g>
                            <g id="SvgjsG5774" class="apexcharts-series apexcharts-radial-series" seriesName="Started"
                              rel="3" data:realIndex="2">
                              <path id="SvgjsPath5775"
                                d="M 138 70.70396341463413 A 78.29603658536587 78.29603658536587 0 1 1 91.97874438217002 212.34282418976363"
                                fill="none" fill-opacity="0.85" stroke="rgba(50,191,255,0.85)" stroke-opacity="1"
                                stroke-linecap="butt" stroke-width="7.162804878048782" stroke-dasharray="0"
                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-2" data:angle="216"
                                data:value="60" index="0" j="2"
                                data:pathOrig="M 138 70.70396341463413 A 78.29603658536587 78.29603658536587 0 1 1 91.97874438217002 212.34282418976363">
                              </path>
                            </g>
                            <circle id="SvgjsCircle5766" r="76.50533536585364" cx="138" cy="149"
                              class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                            <g id="SvgjsG5767" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"
                              style="opacity: 1;"><text id="SvgjsText5768" font-family="Helvetica, Arial, sans-serif"
                                x="138" y="144" text-anchor="middle" dominant-baseline="auto" font-size="16px"
                                font-weight="600" fill="#000000" class="apexcharts-text apexcharts-datalabel-label"
                                style="font-family: Helvetica, Arial, sans-serif; fill: rgb(0, 0, 0);">Total</text><text
                                id="SvgjsText5769" font-family="Helvetica, Arial, sans-serif" x="138" y="170"
                                text-anchor="middle" dominant-baseline="auto" font-size="25px" font-weight="400"
                                fill="#000000" class="apexcharts-text apexcharts-datalabel-value"
                                style="font-family: Helvetica, Arial, sans-serif;">300</text></g>
                          </g>
                        </g>
                      </g>
                      <line id="SvgjsLine5776" x1="0" y1="0" x2="276" y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                        stroke-width="1" class="apexcharts-ycrosshairs"></line>
                      <line id="SvgjsLine5777" x1="0" y1="0" x2="276" y2="0" stroke-dasharray="0" stroke-width="0"
                        class="apexcharts-ycrosshairs-hidden"></line>
                    </g>
                    <g id="SvgjsG5752" class="apexcharts-annotations"></g>
                  </svg>
                  <div class="apexcharts-legend"></div>
                </div>
              </div>
              <div class="resize-triggers">
                <div class="expand-trigger">
                  <div style="width: 389px; height: 370px;"></div>
                </div>
                <div class="contract-trigger"></div>
              </div>
            </div>
            <ul class="list-group list-group-flush mb-0 shadow-none">
              <li class="list-group-item bg-transparent border-top"><i
                  class="bi bi-circle-fill me-2 font-weight-bold text-primary"></i> Total Jobs <span
                  class="float-end">5.8k</span></li>
              <li class="list-group-item bg-transparent"><i
                  class="bi bi-circle-fill me-2 font-weight-bold text-orange"></i>
                Active Jobs <span class="float-end">978</span></li>
              <li class="list-group-item bg-transparent"><i
                  class="bi bi-circle-fill me-2 font-weight-bold text-info"></i>
                Active Applicants <span class="float-end">1200</span></li>
            </ul>
          </div>
        </div>

      </div>
</main>
@endsection()
 