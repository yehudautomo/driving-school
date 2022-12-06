<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="app" class="">
            <nav>
                <a class="logo-container">
                    <img src="/storage/logo.png">
                </a>
                <div class="menu">
                    <a>Test 1</a>
                    <a>Test 2</a>
                    <a>Test 3</a>
                </div>
            </nav>

            <div class="jumbotron">
                <h1>Training Better Drivers</h1>
                <p>Because Safe Driving Is No Accident</p>
            </div>

            <div class="detail-stat">
                <div>
                    <h3>10</h3>
                    <p>Big Cities</p>
                </div>
                <div>
                    <h3>200+</h3>
                    <p>Cars</p>
                </div>
                <div>
                    <h3>75+</h3>
                    <p>Licensed Mentor</p>
                </div>
                <div>
                    <h3>10,000+</h3>
                    <p>Get Licensed</p>
                </div>
            </div>

            <div class="driving-coaches">
                <h2>Our Instructors</h2>
                <div class="instructor-container">
                    <div>
                        <div class="image-container">
                            <img src="/storage/instructor.png"/>
                        </div>
                        <div class="title-continer">
                            <h4>Josn Smith</h4>
                            <p>Senior Instructor</p>
                        </div>
                    </div>
                    <div>
                        <div class="image-container">
                            <img src="/storage/instructor.png"/>
                        </div>
                        <div class="title-continer">
                            <h4>Josn Smith</h4>
                            <p>Senior Instructor</p>
                        </div>
                    </div>
                    <div>
                        <div class="image-container">
                            <img src="/storage/instructor.png"/>
                        </div>
                        <div class="title-continer">
                            <h4>Josn Smith</h4>
                            <p>Senior Instructor</p>
                        </div>
                    </div>
                    <div>
                        <div class="image-container">
                            <img src="/storage/instructor.png"/>
                        </div>
                        <div class="title-continer">
                            <h4>Josn Smith</h4>
                            <p>Senior Instructor</p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="detail-package">
                <h2>Special Package</h2>
                <div class="pricing-container">
                    <div class="pricing-box">
                        <div class="header">
                            <h3>Silver</h3>
                        </div>
                        <div class="detail">
                            <div>8 Hours</div>
                            <div>Monday to Friday</div>
                            <div>Flexible Times</div>
                            <div>Avanza or Xenia</div>
                            <div>Manual</div>
                        </div>
                        <div class="price">
                            <h3>Rp 500.000</h3>
                        </div>
                    </div>
                    <div class="pricing-box">
                        <div class="header">
                            <h3>Gold</h3>
                        </div>
                        <div class="detail">
                            <div>12 Hours</div>
                            <div>Monday to Saturday</div>
                            <div>Flexible Times</div>
                            <div>Avanza or Xenia or Rush</div>
                            <div>Manual or Matic</div>
                        </div>
                        <div class="price">
                            <h3>Rp 900.000</h3>
                        </div>
                    </div>
                    <div class="pricing-box">
                        <div class="header">
                            <h3>Platinum</h3>
                        </div>
                        <div class="detail">
                            <div>24 Hours</div>
                            <div>All week</div>
                            <div>Flexible Times</div>
                            <div>Rush or Innova</div>
                            <div>Manual or Matic</div>
                        </div>
                        <div class="price">
                            <h3>Rp 1.200.000</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact">
                <h2>Contact Us</h2>
                <div class="contact-container">
                    <form class="contact-form">
                        <div class="form-control-custom">
                            <label for="name">Name</label>
                            <input type="text" id="name" placeholder="John Smith" />
                        </div>
                        <div class="form-control-custom">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" placeholder="08123123122" />
                        </div>
                        <div class="form-control-custom">
                            <label for="address">Address</label>
                            <input type="text" id="address" placeholder="Jl. Jendral Sudirman No 123" />
                        </div>
                        <div class="form-control-custom">
                            <label for="address">City</label>
                            <select id="address">
                                <option>Jakarta</option>
                                <option>Surabaya</option>
                                <option>Semarang</option>
                                <option>Solo</option>
                                <option>Jogjakarta</option>
                                <option>Malang</option>
                                <option>Medan</option>
                                <option>Pekanbaru</option>
                                <option>Denpasar</option>
                                <option>Palembang</option>
                            </select>
                        </div>
                        <div class="form-control-custom">
                            <label for="address">Package</label>
                            <select id="address">
                                <option>Silver</option>
                                <option>Gold</option>
                                <option>Platinum</option>
                            </select>
                        </div>
                        <button type="submit">SEND</button>
                    </form>
                    <div class="contact-address-container">
                        <h4>PT. DRIVING SCHOOL INDONESIA</h4>
                        <p class="title">Head Office</p>
                        <p class="value">Jl. Jendral Sudirman 123, Jakarta Selatan</p>
                        <p class="title">Phone Number</p>
                        <p class="value">+62 21 2312 312</p>
                    </div>
                </div>
            </div>

        </div>
    <script src="js/app.js"></script>
    </body>
</html>
