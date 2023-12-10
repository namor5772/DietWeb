
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diet Sentry</title>
    <style type="text/css">
        h1 {
            font: 36pt "arial Black";
            text-align: center;
            background-color: aquamarine;
        }
        h2 {
            font: 18pt "arial Black";
        }
        li { 
            font: 12pt "arial"; 
        }
        p {
            font: 12pt "arial";
        }
        img {
            max-width: 90%;
            height: auto;
            border: 5px solid aquamarine;
        }        
    </style>
</head>

<body>
    <!-- Write your comments here -->
    <h1>Diet Sentry 2.0</h1>
    <p>This is the website presence for the standalone Windows Forms based diet monitoring application called DietSentry 2.0. It enables people to download and install it onto their own Windows computer.</p>
    <p>It contains an Australian based foods database with around 1800 foods using the sensible units, kJ, g, mg and mL, and the d-MMM-yy HH:mm DateTime format. It also contains selected commercial foods based on their mandated Nutritional Information Panels.</p>
    <p>When a food is consumed it is selected and an amount eaten entered. This appends the details to a DateTime stamped record. The cumulative totals of the daily Energy and nutrients can then be monitored.</p>
    <p>New foods can be manually added to the database. For convenience it is also possible to add a recipe to the foods database. Of course foods can be deleted and edited, this includes eaten foods.</p>
    <p>The application source can be cloned into Visual Studio for compiling from the git repository <a href="https://github.com/namor5772/DietSentry">https://github.com/namor5772/DietSentry</a> </p>
<hr/>
    <a href="DietSentry.zip" download> <h2>Download</h2> </a>
    <ul>
        <li>Click on the above link</li>
        <li>Extract All, Use default destination and show extracted files when complete</li>
        <li>Enter DietSentry directory</li>
        <li>Run setup.exe</li>
        <li>If file is protected by Windows Defender press "more info" in dialog and then "Run anyway"</li>
        <li>Press "install"</li>
        <li>App will open, Pin to taskbar</li>
        <li>Next time run as administrator to avoid the Windows Defender dialog</li>
    </ul>
<hr/>
    <p>
        Splash Screen
    </p>
    <p>        
        <img src="DietSentry2.jpg"/>
    </p>
<hr/>
    <p>
        Main Form
    </p>
        <img src="Main2.jpg" alt="The applications main form" />
</body>
</html>
