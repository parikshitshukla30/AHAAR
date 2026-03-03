
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Donor Registration - AHAR</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f2f4f7;
}

/* ================= NAVBAR ================= */

.navbar{
    background:#1f7a1f;
    padding:18px 40px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    color:#ffb000;
    font-size:24px;
    font-weight:700;
}

.nav-links{
    display:flex;
    gap:25px;
}

.nav-links a{
    text-decoration:none;
    color:white;
    font-weight:500;
    transition:0.3s;
}

.nav-links a:hover{
    color:#ffd000;
}

/* ================= HEADER ================= */

.header{
    background:linear-gradient(to right,#3e7d2b,#2f5f23);
    color:white;
    padding:50px 60px;
}

.header h1{
    font-size:36px;
    margin-bottom:10px;
}

.header p{
    font-size:18px;
    opacity:0.9;
}

/* ================= FORM CONTAINER ================= */

.form-container{
    background:white;
    margin:40px auto;
    padding:40px;
    width:90%;
    max-width:1100px;
    border-radius:20px;
    box-shadow:0 8px 20px rgba(0,0,0,0.08);
}

/* ================= FORM GRID ================= */

.form-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:25px 40px;
}

.form-group{
    display:flex;
    flex-direction:column;
}

.form-group label{
    font-weight:600;
    margin-bottom:8px;
}

.form-group input,
.form-group textarea{
    padding:14px;
    border-radius:12px;
    border:1px solid #ccc;
    font-size:15px;
    outline:none;
    transition:0.3s;
}

.form-group input:focus,
.form-group textarea:focus{
    border-color:#2f5f23;
}

/* Phone Input */
.phone-group{
    display:flex;
}

.phone-group span{
    background:#eee;
    padding:14px;
    border-radius:12px 0 0 12px;
    border:1px solid #ccc;
    border-right:none;
}

.phone-group input{
    border-radius:0 12px 12px 0;
    border:1px solid #ccc;
    flex:1;
}

/* Full width fields */
.full-width{
    grid-column:1/3;
}

/* Button */
.submit-btn{
    margin-top:30px;
    width:100%;
    padding:16px;
    background:#2f5f23;
    color:white;
    font-size:18px;
    border:none;
    border-radius:14px;
    cursor:pointer;
    transition:0.3s;
}

.submit-btn:hover{
    background:#244c1b;
}

/* Responsive */
@media(max-width:768px){
    .form-grid{
        grid-template-columns:1fr;
    }
    .full-width{
        grid-column:1/2;
    }
}

</style>
</head>
<body>

<!-- ================= NAVBAR ================= -->

<div class="navbar">
    <div class="logo">AHAAR</div>
    <div class="nav-links">
    <a href="index.html">Home</a>
    <a href="donor registration.html">Donor Register</a >
    <a href="ngo registration.html">NGO Register</a>
    <a href="donate.html">Donate Food</a>
    <a href="dashboard.html">Track Donation</a>
    </div>
</div>

<!-- ================= HEADER ================= -->

<div class="header">
    <h1>Donor Registration</h1>
    <p>Register to donate surplus food and help those in need</p>
</div>

<!-- ================= FORM ================= -->

<div class="form-container">
        <form action="donor_register.php" method="POST">

        <div class="form-grid">


            <div class="form-group">
                <label>Full Name / Organization *</label>
                <input type="text" name="fullname" placeholder="Your name or organization name" required>
            </div>

            <div class="form-group">
                <label>Email Address *</label>
                <input type="email" name="email" placeholder="your@email.com" required>
            </div>

            <div class="form-group">
                <label>Phone Number *</label>
                <div class="phone-group">
                    <span>+91</span>
                    <input type="tel" name="phone" placeholder="10-digit number" required>
                </div>
            </div>

            <div class="form-group">
                <label>City *</label>
                <input type="text" name="city" placeholder="Your city" required>
            </div>

            <div class="form-group">
                <label>Pincode *</label>
            <input type="text" name="pincode" placeholder="6-digit pincode" required>

            </div>

            <div class="form-group">
                <label>Pickup Address *</label>
                <input type="text" name="address" placeholder="Full pickup address" required>
            </div>

            <div class="form-group full-width">
                <label>Additional Notes</label>
                <textarea name="notes" rows="4" placeholder="Mention quantity, expiry time, or special instructions"></textarea>
            </div>

        </div>

        <button type="submit" class="submit-btn">Register as Donor</button>

    </form>
</div>

</body>
</html>
