<div class="padding-y-60 padding-x-90 padding-sm-30 padding-xs-10 bg-lemon iwd-matrix">
    <div class="content padding-x-100 padding-md-30 padding-sm-x-0">
        <div id="question1">
            <div class="columns">
                <div class="column is-3-tablet">
                    <h2>Are you:</h2>
                </div>
                <div class="column is-8-tablet iwd-questions">

                    <div class="iwd-form">
                        <input type="radio" id="general_counsel" name="profession" value="1">
                        <label for="general_counsel">General Counsel</label>

                        <input type="radio" id="house_counsel" name="profession" value="2">
                        <label for="house_counsel">In-House Counsel</label>

                        <input type="radio" id="PPEP" name="profession" value="3">
                        <label for="PPEP">Private Practice Equity Partner</label>

                        <input type="radio" id="PPP" name="profession" value="4">
                        <label for="PPP">Private Practice Partner</label>

                        <input type="radio" id="PPA" name="profession" value="5">
                        <label for="PPA">Private Practice Associate</label>

                        <input type="radio" id="NAL" name="profession" value="6">
                        <label for="NAL">Not a lawyer</label>
                        <br>
                        <button class="button is-secondary" onclick="submitQuestion1()">Submit</button>

                    </div>
                    <p>Pay in the Legal Industry</p>
                    <div class="page-count">1/2</div>
                </div>
            </div>
        </div>
        <div id="question2" style="display:none">
            <div class="columns">
                <div class="column is-3-tablet">
                    <h2>Are you:</h2>
                </div>
                <div class="column is-8-tablet iwd-questions">
                    <div class="iwd-form">
                        <input type="radio" id="male" name="gender" value="1">
                        <label for="male">Male</label>

                        <input type="radio" id="female" name="gender" value="2">
                        <label for="female">Female</label>

                        <input type="radio" id="non" name="gender" value="3">
                        <label for="non">Non-Binary</label>

                        <br>

                        <button class="button is-secondary" onclick="submitQuestion2()">Submit</button>
                    </div>
                    <p>Pay in the Legal Industry</p>
                    <div class="page-count">2/2</div>
                </div>
            </div>
        </div>
        <div id="answer" style="display:none">
            <div class="columns">
                <div class="column is-3-tablet">
                    <h2>You will make:</h2>
                </div>
                <div class="column is-8-tablet iwd-questions">
                    <div class="iwd-form" id="answer-text">
                        
                    </div>
                    <p class="small" id="source-text"> </p>
                    <br>
                    <p>Learn how you can make a change in your organisation</p>
                    <br>
                    <a href="#webinar" class="button is-secondary">Sign up for our webinar</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function submitQuestion1() {
        var profession = document.querySelector('input[name="profession"]:checked').value; // document.getElementById("profession").value;
        document.getElementById("question1").style.display = "none";
        document.getElementById("question2").style.display = "block";
    }

    function submitQuestion2() {
        var gender = document.querySelector('input[name="gender"]:checked').value;
        var profession = document.querySelector('input[name="profession"]:checked').value;
        console.log(gender + ' prof=' + profession)
        var answerText = "";
        var sourceText = "";

        if (profession == 1 && gender == 1) {
            answerText = "<h2>on average $630,000 USD</h2><p>This is 15% more than your female colleagues.</p>";
            sourceText = "*According to https://news.bloomberglaw.com/esg/gender-pay-gap-wide-atop-in-house-counsel-ladder-may-be-closing";
        } else if (profession == 1 && gender == 2) {
            answerText = "<h2>on average $538,000 USD</h2> <p>This is 15% less than your male colleagues.</p>";
            sourceText = "*According to https://news.bloomberglaw.com/esg/gender-pay-gap-wide-atop-in-house-counsel-ladder-may-be-closing";
        } else if (profession == 1 && gender == 3) {
            answerText = "<h2>*There is insufficient data available surounding the pay of Non-Binary and Transgender legal professionals. </h2>";
            sourceText = "";
        } else if (profession == 2 && gender == 1) {
            answerText = "<h2>on average $123,638 USD.</h2> <p>This is 22% more than your female colleagues.</p><p class='small'>*Converted to USD from GBP</p>";
            sourceText = "*According to https://reachwork.com/wp-content/uploads/2022/07/2022-TotallyLegal-Salary-Survey.pdf";
        } else if (profession == 2 && gender == 2) {
            answerText = "<h2>on average $96,520 USD</h2><p>This is 22% less than your male colleagues.</p>";
            sourceText = "*According to https://reachwork.com/wp-content/uploads/2022/07/2022-TotallyLegal-Salary-Survey.pdf";
        } else if (profession == 2 && gender == 3) {
            answerText = "<h2>*There is insufficient data available surounding the pay of Non-Binary and Transgender legal professionals. </h2>";
            sourceText = "*According to https://news.bloomberglaw.com/business-and-practice/will-we-see-big-law-gender-parity-in-20-years-dream-on";
        } else if (profession == 3 && gender == 1) {
            answerText = "<h2>on average $1,130,000 USD</h2><p>This is 34% more than your female colleagues.</p>";
            sourceText = "";
        } else if (profession == 3 && gender == 2) {
            answerText = "<h2>on average $784,000 USD</h2> <p>This is 34% less than your male colleagues.</p>";
            sourceText = "*According to https://news.bloomberglaw.com/business-and-practice/will-we-see-big-law-gender-parity-in-20-years-dream-on";
        } else if (profession == 3 && gender == 3) {
            answerText = "<h2>*There is insufficient data available surounding the pay of Non-Binary and Transgender legal professionals. </h2>";
            sourceText = "";
        } else if (profession == 4 && gender == 1) {
            answerText = "<h2>on average $120,644 USD</h2><p>This is 25% more than your female colleagues.</p>";
            sourceText = "*According to https://reachwork.com/wp-content/uploads/2022/07/2022-TotallyLegal-Salary-Survey.pdf ";
        } else if (profession == 4 && gender == 2) {
            answerText = "<h2>on average $90,869 USD</h2><p>This is 25% less than your male colleagues.</p>";
            sourceText = "*According to https://news.bloomberglaw.com/business-and-practice/male-partners-get-paid-more-than-female-partners-lots-more";
        } else if (profession == 4 && gender == 3) {
            answerText = "<h2>*There is insufficient data available surounding the pay of Non-Binary and Transgender legal professionals. </h2>";
            sourceText = "";
        } else if (profession == 5 && gender == 1) {
            answerText = "<h2>on average $84,188 USD</h2><p>This is 13% more than your female colleagues.</p>";
            sourceText = "*According to https://mcca.com/mcca-article/are-minority-and-women-general-counsel-undercompensated/";
        } else if (profession == 5 && gender == 2) {
            answerText = "<h2>on average $73,476 USD</h2><p>This is 13% less than your male colleagues</p>";
            sourceText = "*According to https://mcca.com/mcca-article/are-minority-and-women-general-counsel-undercompensated/";
        } else if (profession == 5 && gender == 3) {
            answerText = "<h2>*There is insufficient data available surounding the pay of Non-Binary and Transgender legal professionals. </h2>";
            sourceText = "";
        } else if (profession == 6 && gender == 1) {
            answerText = "<h2>Regardless of your industry, as a man, on average you will make 18% more than your female colleagues.</h2>";
            sourceText = "*According to https://www.pewresearch.org/fact-tank/2023/03/01/gender-pay-gap-facts/";
        } else if (profession == 6 && gender == 2) {
            answerText = "<h2>Regardless of your industry, as a woman, on average you will make 18% less than your male colleagues.</h2>";
            sourceText = "*According to https://www.pewresearch.org/fact-tank/2023/03/01/gender-pay-gap-facts/";
        } else if (profession == 6 && gender == 3) {
            answerText = "<h2>Regardless of your industry, as a non-binary professional, you will make on avereage 30% less than your cisgender colleagues.</h2>";
            sourceText = "*According to https://www.hrc.org/resources/the-wage-gap-among-lgbtq-workers-in-the-united-states";
        }
        

        // console.log(' answerText= ' + answerText)
        document.getElementById("answer-text").innerHTML = answerText;
        document.getElementById("source-text").innerHTML = sourceText;
        document.getElementById("question2").style.display = "none";
        document.getElementById("answer").style.display = "block";
    }
</script>