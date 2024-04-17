<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOXS MEDICAL CENTER</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="user"> 
        <nav>
            <img class="logo" type="image/png" src="images/titlelogo.png">
            <h2>NOXS MEDICAL CENTER</h2>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
            <img class="notif" type ="image/png" src="images/notifications.png" onclick="togglenotif()">
            <div class="notification" id="notifmenu">                <div id="helpModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeHelp()">&times;</span>
                        <h2>Help & Support</h2>
                        <br>
                        <br>
                        <h3>How to set schedule</h3>
                        <p>1. Choose a date inside the cell, It must be a present or future date</p>
                        <p>2. If you wish to check other months, simply press the arrow key right or left in the upper left of the calendar.</p>
                        <p>3. Once you've decided on a day, you may double-check it at the bottom of the calendar under "selected date."</p>
                        <p>4. After double-checking, click "Set Appointment" to successfully secure your appointment.</p>
                        <h3>How to edit profile</h3>
                        <p>1. Click your profile picture upper right of the page</p>
                        <p>2. Click edit profile</p>
                    </div>
                </div>
                <div class ="notifscroll">
                    <div class="notifbar">
                        <h3>Notifications</h3>
                    </div>
                    <br>
                    <hr>
                </div>
            </div>
            <img class="userpic" type="image/jpg" src="images/userpic1.jpg" onclick="togglemenu()">
            <div class = "drop-down" id="submenu">
                <div class="sub-menu">
                    <div class="userinfo">
                        <img src="images/userpic1.jpg">
                        <h3>Charles Adrian</h3>
                    </div>
                    <br>
                    <hr>
                    <a href="#" class="profile-link">
                    <img src="images/profileicon.png">
                        <p>Edit Profile</p>
                        <span>></span>
                    </a>
                    <a href="#" onclick="openHelp()" class="profile-link">
                    <img src="images/help.png">
                        <p>Help & Support</p>
                        <span>></span>
                    </a>
                    <a href="#" class="profile-link">
                    <img src="images/logout.png">
                        <p>Logout</p>
                        <span>></span>
                    </a>
                </div>
            </div>
        </nav>
        <div class="card">
            <div class="card-image">
                <img src="images/cover1.jpg" alt="">
            </div>
            <div class="profile-image">
                <img src="images/userpic1.jpg" alt="">
            </div>
            <div class="card-content">
                <h3>Charles Adrian</h3>
                <p>Address: Batasan Hills, Quezon City</p>
                <p>Birthday: July 18, 2003</p>
                <p>Registration Date: December 2, 2023</p>
            </div>
        </div>
        <div class="scroll">
            <div class="scroll-div">
              <div class="scroll-content">
                <h2>Medical History</h2>
                <hr>
                <br>
                <p>Patient is a 20 year-old well-nourished Hispanic male with a 2-month
                history of Rheumatoid Arthritis and strong family history of autoimmune diseases presenting after
                an episode of lightheadedness and muscle weakness.Patient began experiencing symptoms 4 months ago (November 2017). 
                At that time he experienced fatigue and joint pain in the knees and hands. He was diagnosed with Rheumatoid Arthritis. 
                He was given a short course of corticosteroids at that time that alleviated his symptoms. He was also started on 
                methotrexate at that time. However, he felt that the medication was ineffective andstopped after 2 weeks.
                For the past two months, the patient has been experiencing worsening symptoms. He has been experiencing progressively
                worsening headaches accompanied with lightheadedness, light and sound sensitivity, nausea, and vomiting. He reports no 
                loss of consciousness associated with the headaches. No convulsion, change of vision, or loss of continence. When the 
                headaches began 2 months ago, they would last about half of a day and occur approximately once per week. They
                increased in frequency and duration and over the last month have been almost daily and lastedmost of the day. 
                He is unable to eat during headaches. Concurrently, the patient is experiencing worsening joint pain in the knees and hands. 
                The pain is constant, accompanied by swollen and hot joints, and not alleviated by NSAIDS. Also in the last two months, 
                he has experienced a dry mouth that makes swallowing food difficult and a burning sensation in his eyes.</p>
              </div>
            </div>
        </div>
    </div>
    <div id="calendar" class="cal">
    <form id="appointmentForm" action="app.php" method="post">
        <center>
        <label for="appointment_date" style="font-size: 17px;">Selected Date:</label>
        <input type="text" id="appointment_date" name="appointment_date" readonly required>
        <br>
        <input type="submit" value="Set Appointment">
        </center>
    </form>
    </div>
<script>
    function openHelp() {  // script for help pop-up
        document.getElementById("helpModal").style.display = "block";
    }
    function closeHelp() {
        document.getElementById("helpModal").style.display = "none";
    }
    window.onclick = function(event) {
        var modal = document.getElementById("helpModal");
        if (event.target === modal) {
        modal.style.display = "none";
    }
};
    let notifmenu = document.getElementById("notifmenu"); //used to dropdown notif and profile

    function togglenotif(){
        notifmenu.classList.toggle("open-bar");
    }
    let submenu = document.getElementById("submenu");

    function togglemenu(){
        submenu.classList.toggle("open-menu");
    }

    $(document).ready(function () {
        var selectedDate;
        $('#calendar').fullCalendar({
            selectable: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: ''
            },
            select: function (start, end) {
                var today = moment().startOf('day');
                if (start.isSameOrBefore(today)) {
                    alert('Please select a future date!');
                    $('#calendar').fullCalendar('unselect');
                } else {
                    selectedDate = start.format('YYYY-MM-DD');
                    $('#appointment_date').val(selectedDate);
                }
            }
        });
        $('#appointmentForm').submit(function (e) {
        e.preventDefault();
        if (selectedDate) {
            $.ajax({
                type: "POST",
                url: "app.php",
                data: { appointment_date: selectedDate },
                success: function(response) {
                    alert(response);
                }
            });
            } else {
                alert('Please select an appointment date!');
            }
        });
    });
</script>
</body>
</html>