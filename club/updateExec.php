<?php include('navbar.php');?>

<h1>UPDATE EXEC TEAM</h1><br>
</div>

<form action="backend/updateExec.php" id="clubForm" method="post">
    <div class = "umbrella">

        <br>

        <div class="search-box">
            <input type="text" name = "id" id = "id" value="" class="search-txt" placeholder="Club ID"/>
            <div class="search-btn">
            </div>
        </div>

        <br>
        <br>

        <div class="box">
        <select name="yearList" id="yearList">
            <option value="" disabled selected>Year</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
        </select>
        </div>

        <br>
        <br>
        <br>
        <br>
        
        <div class="search-box">
            <input type="text" name = "president" id = "president" value=""class="search-txt" placeholder="New President"/>
            <div class="search-btn">
            </div>
        </div>

        <div class="box">
        <select name="typeList" id="pYearList">
            <option value="" disabled selected>New Grade</option>
            <option value="Freshman">Freshman</option>
            <option value="Sophmore">Sophmore</option>
            <option value="Junior">Junior</option>
            <option value="Senior">Senior</option>
            <option value="Senior">Other</option>
        </select>
        </div>

        <br>
        <br> 
        
        <div class="search-box">
            <input type="text" name = "vicePresident" id = "vicePresident" value="" class="search-txt" placeholder="New Vice President"/>
            <div class="search-btn">
            </div>
        </div>

        <div class="box">
        <select name="typeList" id="vYearList">
            <option value="" disabled selected>New Grade</option>
            <option value="Freshman">Freshman</option>
            <option value="Sophmore">Sophmore</option>
            <option value="Junior">Junior</option>
            <option value="Senior">Senior</option>
            <option value="Senior">Other</option>
        </select>
        </div>

        <br>
        <br> 
        
        <div class="search-box">
            <input type="text" name = "treasurer" id = "treasurer" value="" class="search-txt" placeholder="New Treasurer"/>
            <div class="search-btn">
            </div>
        </div>
        
        <div class="box">
        <select name="typeList" id="tYearList">
            <option value="" disabled selected>New Grade</option>
            <option value="Freshman">Freshman</option>
            <option value="Sophmore">Sophmore</option>
            <option value="Junior">Junior</option>
            <option value="Senior">Senior</option>
            <option value="Senior">Other</option>
        </select>
        </div>

        <br>
        <br> 

        <div class="search-box">
            <input type="text" name = "riskManager" id = "riskManager" value="" class="search-txt" placeholder="New Risk Manager"/>
            <div class="search-btn">
            </div>
        </div>

        <div class="box">
        <select name="typeList" id="rYearList">
            <option value="" disabled selected>New Grade</option>
            <option value="Freshman">Freshman</option>
            <option value="Sophmore">Sophmore</option>
            <option value="Junior">Junior</option>
            <option value="Senior">Senior</option>
            <option value="Senior">Other</option>
        </select>
        </div>

        <br>
        <br> 

        <div class="search-box">
            <input type="text" name = "advisor" id = "advisor" value="" class="search-txt" placeholder="New Advisor"/>
            <div class="search-btn">
        </div>

        <br>
        <br>
        
        <input class="sub" type="submit" value="UPDATE">
        
<?php include('footer.php');?>
