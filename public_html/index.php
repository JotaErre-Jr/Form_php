<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Shere your story of alien abduction</p>
    <form class="" action="report.php" method="post">
        <label for="firtname">Firt name</label>
        <input type="text" id="firtname" name="firtname" value=""><br/>
        <label for="lastname">Last name</label>
        <input type="text" id="lastname" name="lastname" value=""><br/>
        <label for="email">What is e-mail eddress?</label>
        <input type="text" id="email" name="email" value=""><br/>
        <label for="whenithappened">When did it happen?</label>
        <input type="text" id="whenithappened" name="whenithappened" value=""><br/>
        <label for="howlong">How long were you gone?</label>
        <input type="text" id="howlong" name="howlong" value=""><br/>
        <label for="howmany">How many did you see?</label>
        <input type="text" id="howmany" name="howmany" value=""><br/>
        <label for="aliendescription">Describe them:</label>
        <input type="text" id="aliendescription" name="aliendescription" size="32" value=""><br/>
        <label for="whattheydid">What did they do to you?</label>
        <input type="text" id="whattheydid" name="whattheydid" size="32" value=""><br/>
        <label for="fangspotted">Have you seen my dog Fang?</label>
        Yes<input type="radio" id="fangspotted" name="fangspotted" value="yes">
        No<input type="radio" id="fangspotted" name="fangspotted" value="no"><br/>
        <label for="other">Anything else you want to add?</label>
        <textarea name="other" id="other" rows="8" cols="80"></textarea><br/>
        <input type="submit" name="submit" value="Report abduction">

    </form>
  </body>
</html>
