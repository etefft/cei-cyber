<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <style>
        #outer-site {
            background-color: blue;
        }

        #main-content {
            width: 442px;
        }

        #inner-site {
            display: flex;
            width: 80%;
            margin: 0 auto;
            padding: 50px 0;
            background-color: #ffffff;
            justify-content: space-evenly;
            max-width: 1100px;
        }

        .degrees {
            font-weight: bold;
            font-size: 14px;
        }

        h3 {
            font-family: Anton;
            font-size: 25px;
            white-space: nowrap;
        }

        a {
            text-decoration: none;
            color: #0060a9;
        }

        h4 {
            font-size: 18px;
            font-weight: normal;
        }

        .blue-text,
        h4 {
            color: #0060a9;
            margin: 5px 0;
        }

        .box-hdr {
            text-transform: uppercase;
            margin-bottom: 7px;
            font-weight: 600;
        }

        #left-side-menu li {
            list-style: none;
            border-bottom: solid 1px;
            border-bottom-color: #ECECEC;
            padding-bottom: 5px;
            margin-bottom: 5px;
        }

        #left-side-menu {
            width: 25%;
            padding: 0 30px;
        }

        ul li {}

        ul li ul li {
            font-weight: normal;
        }

        .card-body img {
            width: 60%;
        }

        p,
        h4,
        a,
        li {
            font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        ul {
            padding: 0;
        }

        ul ul {
            padding-left: 10px;
        }

        button {
            width: 200px;
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.33;
            border-radius: 6px;
            color: #ffffff;
            background-color: #0060a9;
            border-color: #004687;
            display: inline-block;
            margin-bottom: 0;
            font-weight: normal;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
        }

        ul li {
            text-decoration: none;
            list-style: none;
        }

        .gray-box {
            padding: 5px 10px;
            margin: 30px 10px;
            width: 80%;
            min-width: 190px;
        }

        .right-link-var {
            width: 70%;

        }

        .responsive-iframe-container {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px;
            height: 0;
            overflow: hidden;
        }

        iframe {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        span {
            font-weight: bold;
        }

        #buttons {
            display: flex;
            justify-content: space-between;
        }

        #buttons button {
            height: 75px;
        }

        .card-body {
            max-width: 288px;
            max-height: 500px;
            overflow-y: scroll;
        }

        #accordion button {
            text-align: left;
        }

        .image li {
            list-style: inside;
        }

        @media only screen and (max-width: 1016px) {
            #inner-site {
                flex-direction: column;
                align-items: flex-start;
                justify-content: center;
                padding: 0 20px;
            }

            #main-content {
                width: 100%;
            }

            iframe {
                width: 100%;
                height: 100%;
            }

            #right-link-bar {
                width: 100%;
            }

            .gray-box {
                width: 80%;
            }
        }


        @media only screen and (max-width: 500px) {
            #buttons {
                flex-direction: column;
                width: 100%;
            }

            button {
                height: 80px;
                width: 100%;
                margin-top: 30px;
            }
        }
    </style>
</head>

<body>
    <div id="outer-site">
        <section id="inner-site">
            <div id="left-side-menu">
                <img src="http://www.cei.edu/images/CEI_logo.png" alt="">
                <ul>
                    <li>
                        <ul class="leftnav">
                            <strong>
                                <li><a href="http://www.cei.edu/programs-of-study/business">Business &amp;
                                        Technology</a>
                            </strong>
                            <ul class="leftnav">
                                <li><a href="http://www.cei.edu/programs-of-study/business/business-technologies">Business
                                        Management</a></li>
                                <li><a href="http://www.cei.edu/programs-of-study/business/computer-networking">Computer
                                        Networking</a></li>
                                <li class="selected"><a
                                        href="http://www.cei.edu/programs-of-study/business/information-assurance-and-cybersecurity">Information
                                        Assurance and Cybersecurity</a></li>
                                <li><a href="http://www.cei.edu/programs-of-study/business/legal">Legal</a></li>
                                <li><a href="http://www.cei.edu/programs-of-study/business/radiation-safety">Radiation
                                        Safety</a></li>
                                <li><a href="http://www.cei.edu/programs-of-study/business/web-development">Web
                                        Development</a></li>
                            </ul>
                    </li>
                    <strong>
                        <li><a href="http://www.cei.edu/programs-of-study/health-professions">Health Professions</a>
                    </strong>
                    </li>
                    <strong>
                        <li><a href="http://www.cei.edu/programs-of-study/trades-industry">Trades &amp; Industry</a>
                    </strong>
                    </li>
                    <strong>
                        <li><a href="http://www.cei.edu/programs-of-study/general-education">General Education</a>
                    </strong>
                    </li>
                    <strong>
                        <li><a href="http://www.cei.edu/programs-of-study/adult-basic-education">Adult Basic
                                Education</a></li>
                    </strong>
                    <strong>
                        <li><a href="http://www.cei.edu/programs-of-study/online-courses">Online Learning</a></li>
                    </strong>
                    <strong>
                        <li><a href="http://www.cei.edu/programs-of-study/outreach-centers">Outreach Centers</a>
                        </li>
                    </strong>
                </ul>
                </li>
                </ul>
            </div>
            <div id="main-content">
                <a href="">BUSINESS & TECHNOLOGY</a>
                <h3 class="blue-text">Information Assurance and Cybersecurity</h3>
                <div class="responsive-iframe-container">
                    <iframe width="442" height="278" src="https://www.youtube.com/embed/Jw-qSvjlmaI" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <p>The Information Assurance and Cybersecurity program is a new technical degree option that will
                    prepare you to work in the rapidly evolving, high-demand; high wage world of cybersecurity.</p>
                <p><span>For more detailed information: </span> <a href="">Cyber Admissions Handout</a></p>
                <h4>What Jobs Can I Get?</h4>
                <p><span>Information Security Analyst</span> (SOC code 15-1122): Plan, implement, upgrade, or monitor
                    security measures for the protection of computer networks and information. May ensure appropriate
                    security controls are in place that will safeguard digital files and vital electronic
                    infrastructure. May respond to computer security breaches and viruses.</p>
                <p>Source: Idaho Department of Labor, EMSI, HWOL, O*NET</p>
                <h4>How Long Will it Take?</h4>
                <a href="" class="degrees">ASSOCIATE OF APPLIED SCIENCE DEGREE (AAS)</a>
                <p>4 semesters</p>
                <a href="" class="degrees">INTERMEDIATE TECHNICAL CERTIFICATE (ITC)</a>
                <p>2 semesters</p>
                <a href="" class="degrees">BASIC TECHNICAL CERTIFICATE (BTC)</a>
                <p>2 semesters</p>
                <ol>
                    <li>Install, configure, secure, maintain, and troubleshoot computer hardware and software.</li>
                    <li>Setup, configure secure and troubleshoot basic network hardware and services.</li>
                    <li>Implement, monitor, and maintain network servers including web servers and network applications.
                    </li>
                    <li>Employ professional, team, and ethical behaviors that contribute to continued employability
                        accounting for technological advances.</li>
                    <li>Design, implement, operate, and troubleshoot enterprise network and server infrastructure to
                        meet technical and business requirements.</li>
                    <li>Design, implement, test, and evaluate software components and systems meeting given requirements
                    </li>
                    <li>Identify cyber threats, create strategies to locate and recover evidence, and perform forensic
                        analysis</li>
                    <li>Educate users about cyber threats, monitor security systems, and prepare appropriate
                        documentation.</li>
                </ol>
                <div id="buttons">
                    <a href="http://www.cei.edu/falcons/resources/programs/cei-application.pdf"><button>CEI
                            Application</button></a>
                    <a href="http://www.cei.edu/falcons/resources/programs/cybersecurityprogramapplications19.pdf"><button>Cybersecurity
                            Program Application</button></a>
                </div>
            </div>
            <div id="right-link-bar">


                <div id="accordion" class="gray-box">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Contact
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                <p class="box-hdr">CONTACT</p>
                                <p><strong>Program Manager</strong></p>
                                <p>Don Williams<br />(208) 535-5429<br /><a
                                        href="mailto:donald.williams@cei.edu">donald.williams@cei.edu</a></p>
                                <p><strong>Computer Networking</strong></p>
                                <p>Don Casper<br />(208) 535-5429<br /><a
                                        href="mailto:donald.casper@cei.edu">donald.casper@cei.edu</a></p>
                                <p><strong>Computer Networking Technologies</strong></p>
                                <p>Joshua Duersch<br />(208) 535-5474<br /><a
                                        href="mailto:joshua.duersch@cei.edu">joshua.duersch@cei.edu
                                    </a></p>
                                <p><em><strong>&ndash; OR -</strong></em></p>
                                <p><strong>Admissions Counselor</strong></p>
                                <p>Jaime Campbell-Lavallee<br />(208) 535-5418<br /><a
                                        href="mailto:jaime.campbell@cei.edu">jaime.campbell@cei.edu</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Calendar
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <?php

                                    require("simple_html_dom.php");

                                    $url = "http://www.cei.edu/about-us/news-and-events";

                                    $html = file_get_html($url);

                                    
                                    foreach ($html->find("#InnerContent .col-md-7 ul") as $key => $value) {
                                        echo $value;
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    CEI Resources
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                                <a
                                    href="https://www.google.com/url?client=internal-element-cse&cx=014240197888640624628:lhr2t2zcvf4&q=https://cei.edu/mycei/help-deskit&sa=U&ved=2ahUKEwjdysPepafoAhWK4J4KHaylDG8QFjAAegQIARAB&usg=AOvVaw0g7HIr_lEUdJazKfCJK-0z">IT
                                    Student Help Desk</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Student Cyber Work
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it
                                    squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica,
                                    craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                    synth
                                    nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Cybersecurity Resources
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <a href="https://www.nsa.gov/" target="_blank"><img
                                            src="http://www.nic.edu/modules/images/websites/192/image/nsa.png"
                                            alt="National Security Agency" style=" margin: -5px 0 20px 0;"></a>
                                    <a href="http://www.dhs.gov/" target="_blank"><img
                                            src="http://www.nic.edu/modules/images/websites/192/image/dhs.jpg"
                                            alt="Department of Homeland Security" style=" margin: -5px 0 20px 0;"></a>
                                    <a href="https://www.nationalcyberwatch.org/" target="_blank"><img
                                            src="http://www.nic.edu/modules/images/websites/192/image/cyberwatchlogo.png"
                                            alt="CyberWatch" style=" margin: -5px 0 20px 0;"></a>
                                    <a href="http://www.ncyte.net" target="_blank"><img
                                            src="http://www.nic.edu/modules/images/websites/192/image/NCYTE_logo_Black_250.png"
                                            alt="National Cybersecurity Training &amp; Education Center (NCyTE)"
                                            style=" margin: -5px 0 20px 0;"></a>
                                    <a href="https://www.solarium.gov/" target="_blank"><img
                                            src="https://lh4.googleusercontent.com/QByRsQOvilRN2b-Vio7n5ClO1Zp3mXfWcSrj8suXn4Pp8RdVOV4eb1BslNaZgCTGbQ_QqO2aFw=w1280"
                                            alt="Cyberspace Solarium Commission" style=" margin: -5px 0 20px 0;"></a>

                                    <ul class="image">
                                        <li><a href="https://www.cyberseek.org/" target="_blank">Cyberseek: A Map to
                                                Solving
                                                the Cybersecurity Skills Gap</a></li>
                                        <li><a href="https://cybersecurity.idaho.gov/" target="_blank">State of Idaho
                                                Cybersecurity Awareness</a></li>
                                        <li><a href="https://staysafeonline.org/get-involved/" target="_blank">Stay Safe
                                                Online--Teach Online Safety</a></li>
                                        <li><a href="http://nicerc.org/curricula/" target="_blank">Free
                                                Application-Based
                                                Cybersecurity Curricula for K-12 Teachers</a></li>
                                        <li><a href="http://www.cybersecurityeducation.org/careers"
                                                target="_blank">Cybersecurity Careers</a></li>
                                        <li><a href="https://www.cyberdegrees.org/?"
                                                target="_blank">CyberDegrees.org</a>
                                        </li>
                                        <li><a href="http://www.teachingprivacy.org" target="_blank">Teaching
                                                Privacy</a>
                                        </li>
                                        <li><a href="https://computersciencems.com/resources/cyber-security/"
                                                target="_blank">Computer Science Master Degrees/Cybersecurity Resource
                                                Links</a></li>
                                        <li><a href="https://www.affordablecollegesonline.org/degrees/best-online-bachelors-in-cyber-security-programs/"
                                                target="_blank">Online Cybersecurity Bachelor Degree Programs</a></li>
                                        <li><a href="https://www.datascienceprograms.org/careers/" target="_blank">Data
                                                Science Careers</a></li>
                                        <li><a href=" https://typesofengineeringdegrees.org/engineer-careers/"
                                                target="_blank">Engineering Degree Opportunities</a></li>
                                        <li><a href="https://cybersecurityguide.org/" target="_blank">Cybersecurity
                                                Guide</a></li>
                                        <li><a href="https://online.york.ac.uk/resources/introduction-to-cyber-security-data-protection/"
                                                target="_blank">Introduction to Cybersecurity and Data Protection</a>
                                        </li>
                                        <li><a href="https://www.concordlawschool.edu/blog/news/ediscovery-privacy-cybersecurity-law/"
                                                target="_blank">E-discovery, Privacy, and Cybersecurity Law</a></li>
                                        <li><a href="https://www.jdsupra.com/legalnews/nist-privacy-framework-released-43421/?origin=CEG&utm_source=CEG&utm_medium=email&utm_campaign=CustomEmailDigest&utm_term=jds-article&utm_content=article-link"
                                                target="_blank">NIST Privacy Framework</a></li>
                                        <li><a href="https://www.smartbrief.com/original/2020/01/glimpse-future-cybersecurity"
                                                target="_blank">A Glimpse into the Future of Cybersecurity</a></li>
                                        <li><a href="https://www.wired.com/story/zero-day-hacking-map-countries/"
                                                target="_blank">Global Spread of Zero-Day Hacking Techniques</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="gray-box">
                        <p class="box-hdr">GAINFUL EMPLOYMENT DISCLOSURES</p>

                        <a href="http://www.cei.edu/gainful_emp_reports/cs_itc/" target="_blank">Cyber Security
                            (ITC)</a>
                        <a href="http://www.cei.edu/gainful_emp_reports/cs_btc/" target="_blank">Cyber Security
                            (BTC)</a>

                    </div>
                    <div class="gray-box">

                    </div>
                </div>
        </section>
    </div>
</body>

</html>