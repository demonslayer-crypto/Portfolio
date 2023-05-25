<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        :root {
            --bg-color: #1f242d;
            --second-bg-color: #323946;
            --text-color: #fff;
            --main-color: #0ef;
        }

        span {
            color: var(--main-color);
        }

        hr {
            border: 1px solid #ccc;
            width: auto;
        }

        body {
            margin-left: 25px;
            margin-bottom: 25px;
            background: var(--bg-color);
            color: var(--text-color);
            overflow-x: hidden;
        }

        .home-img {
            margin-left: 25px;
            animation: floatImage 4s ease-in-out infinite;
        }

        @keyframes floatImage {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-1.4rem);
    }
    100% {
        transform: translateY(0);
    }
}

        .container {
            display: flex;
            background: var(--second-bg-color);
            border-radius: 1.5rem;
        }

        .container pre {
            font-size: 16px;

        }

        .container pre .content {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            overflow-y: hidden;
        }

        .education {
            background: var(--second-bg-color);
            border-radius: 1.5rem;
        }

        .education h2 {
            margin-top: 20px;
            margin-left: 25px;
        }

        .education table {
            display: inline-table;
            width: 70%;
            height: 20%;
            padding: .25rem;
            margin-left: 20px;
            margin-bottom: 15px;
            justify-content: center;
            align-items: center;
        }

        .training {
            background: var(--second-bg-color);
            border-radius: 1.5rem;
        }

        .training h2 {
            margin-top: 20px;
            margin-left: 25px;
            margin-bottom: 15px;
        }

        .training ul {
            margin-top: 20px;
            margin-left: 25px;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            padding: 0.3rem 5%;
            background: var(--second-bg-color);
            border-radius: 1.5rem;
        }

        .footer-text {
            font-size: 0.75rem;
        }
    </style>

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <div class="container">
        <table>
            <tr>
                <td>
                    <img class="home-img"style="float: left" height="250px" src="images/cartoon1.jpg" alt="Khushwant's Image">
                </td>
                <td>
                    <br><br><br>
                    <h3>
                        <pre style="font-size: 2.6rem;">   Khushwant Chand</pre>
                    </h3>
                    <p>
                        <font size="6">
                            <pre><strong><span>     <u><span class = "multiple-text">About Me! :</span></u></span></strong></pre>
                        </font>
                    </p>
                    <pre align="left">
                        <pre class="content">         To make my best endeavors towards the work allotted to me by the company with the help of my soft skills,<pre>         educational knowledge and the power bring innovation at work. Also, allowing myself to use the opportunity <pre>         as a new learning experience of an organization.Seeks a nurturing environment that provides active mentorship</pre>         and supports individual and collective growth and perseverance. </pre>                            
                        </pre>
                    </pre>
                </td>
            </tr>
        </table>
    </div>
    <hr>
    <!-- Header ends here -->
    <div class="education">
        <h2> Qualifications: </h2>
        <table border="5px" style="border-color: #000000;">
            <caption style="margin-bottom: 10px;">
                <span style="font-size: 1.6rem;"><u>Education</u></span>
            </caption>
            <thead>
                <tr>
                    <th>
                        Course
                    </th>
                    <th>
                        Institute
                    </th>
                    <th>
                        Year
                    </th>
                    <th>
                        Result
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        B.TECH in ECE
                    </td>
                    <td>
                        Guru Nanak Dev University, Amritsar
                    </td>
                    <td>
                        2019-23
                    </td>
                    <td>
                        7.79 CGPA
                    </td>
                </tr>
                <tr>
                    <td>
                        12<sup>th</sup>Grade
                    </td>
                    <td>
                        Army Public School Danapur Cantt
                    </td>
                    <td>
                        2018-19
                    </td>
                    <td>
                        92.4%
                    </td>
                </tr>
                <tr>
                    <td>
                        10<sup>th</sup>Grade
                    </td>
                    <td>
                        Army Public School Danapur Cantt
                    </td>
                    <td>2016-17
                    </td>
                    <td>
                        10 CGPA
                    </td>
                </tr>
            </tbody>
        </table><br>
    </div>
    <hr>
    <!-- Internship and Training -->
    <div class="training">
        <h2> <span class="multiple-text1">Internships:</span></h2>
        <ul>
            <li>
                <strong>
                    Full-Stack Development Trainee
                </strong>
                at ICE Technology Lab, Patna Branch under Mr. Sanket Kumar till June 2023.
            </li>
            <li>
                <strong>
                    C++ Programming Intern
                </strong>
                by Mycaptain with Captain Aadhar Bhatnagar in July 2022.
            </li>
            <li>
                <strong>
                    Python Programming Intern
                </strong>
                by Mycaptain with Captain Aadhar Bhatnagar in July 2022.
            </li>
            <li>
                <strong>
                    Web Designing and Development Intern
                </strong>
                by ICETL with Mr. Sanket Sir in January 2023.
            </li>
        </ul>
    </div>
    <hr>

    <!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by Khushwant | All Rights Reserved.</p>
        </div>
    </footer>


    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed js -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

</body>

<script src="logic.js"></script>

</html>