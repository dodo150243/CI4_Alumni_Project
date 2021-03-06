<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Boostrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <style>
    body {
        font-family: 'Kanit', sans-serif;
    }

    #container {
        background-color: lightgray;
        width: 100%;
        height: 1500px;
    }

    .navbar-brand {
        color: #FFFFFF;
        font-size: 30px;
        font-weight: bold;
        left: 10px;
    }

    .navbar-brand:hover {
        color: #FFFFFF;

    }

    .nav-link:hover {
        color: #FFFFFF;
        background-color: #1E90FF;
    }

    .nav-link:visited {
        color: #FFFFFF;
    }

    .bg-dark {
        box-shadow: 0px 5px 5px rgb(0 0 0 / 35%);
    }


    #u0_div {

        margin-bottom: 10px;
        margin-top: 50px;
        width: 668px;
        background: inherit;
        background-color: white;
        border: none;
        border-radius: 10px;
        box-shadow: 5px 5px 5px rgb(0 0 0 / 35%);
    }

    #u1_text {
        font-weight: 700;
        font-style: normal;
        font-size: 24px;
        letter-spacing: 0.4px;
        text-align: center;
        padding-top: 25px;
    }

    label {
        font-size: 14px;
        font-weight: 600;
        font-style: inherit;

        margin-bottom: 2px;
        display: block;
    }

    input {
        font-weight: 300;
        padding: 2px;
        border-color: lightgrey;
        border-radius: 1px;
    }

    .select {
        font-weight: 300;
        padding: 2px;
        border-color: lightgrey;
        border-radius: 1px;
    }

    .form-row {
        display: flex;
        padding-left: 50px;
        padding-bottom: 7px;
    }


    .form-row .form-group {
        padding: 5px 2px;
    }

    .register-form {
        padding: 0 10px 40px;
        padding-bottom: 20px;
    }

    .btn {
        width: 406px;
    }

    #btn {
        padding: 10px 10px 10px 110px;
    }

    .select {
        width: 60px;

        font-size: inherit;
        line-height: inherit;
        height: 30px;
    }

    #regis0 {
        padding-left: 65px;
    }

    #hr {
        border-bottom: 1px;
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 2px;
        display: block;
        padding-left: 10px;
    }

    #date {
        width: 200px;
    }

    #text0 {
        padding-left: 20px;
    }

    #faculty,
    #edu_level {
        width: 200px;
    }

    #u235 {
        border-width: 0px;
        position: absolute;
        top: 130px;
        display: flex;
        font-family: 'Roboto Bold', 'Roboto Regular', 'Roboto', sans-serif;
        font-weight: 700;
        font-style: normal;
        font-size: 15px;
    }

    footer,
    #footer_link {
        color: #FFFFFF;
        text-decoration: none;
    }

    #backto {
        font-family: 'Kanit', sans-serif;
        font-weight: 300;

    }

    #sexText {
        display: inline;
    }

    #sexMr {
        padding-top: 30px;
        width: 60px;
    }

    #sexMrs {
        padding-top: 30px;
        width: 60px;
    }

    #sexLabel {
        padding-top: 5px;
        width: 0px;
    }
    </style>



</head>

<body>

    <div id="container">

        <!-- Tag Header -->
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home">ISAC</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/search_page" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                ค้นหาข้อมูลศิษย์เก่า
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/search_page">จากชื่อ</a></li>
                                <li><a class="dropdown-item" href="/search_page">จากปีแรกเข้า</a></li>
                                <li><a class="dropdown-item" href="/search_page">จากจังหวัด</a></li>
                                <li><a class="dropdown-item" href="/search_page">จากหมู่เรียน</a></li>
                                <li><a class="dropdown-item" href="/search_page">จากรหัสนักศึกษา</a></li>
                            </ul>
                        </li>


                    </ul>
                    <a class="nav-link" href="/login">เข้าสู่ระบบ</a>
                </div>
            </div>
        </nav>

        <?php if (isset($validation)) : ?>
        <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
        <?php endif; ?>

        <div id="u0_div" class="container">


            <!--------------------------------------(ข้อมูลนักศึกษา)------------------------------------------------------>

            <form id="create-form" action="/register/save" method="post" class="register-form">

                <a style="color:black" href="/home">
                    <div id="u235" class="ax_default label" style="cursor: pointer;">
                        <div id="u235_text" class="text ">
                            <p id="backto"><span>
                                    <&nbsp;back </span>
                            </p>
                        </div>
                    </div>
                </a>
                <!-- <div id="hr">ข้อมูลนักศึกษา</div> -->
                <div id="u1_text">
                    <p><span>ลงทะเบียนศิษย์เก่า</span></p>
                </div>

                <!-- ------------------------------------------------(ข้อมูลนักศึกษา)---------------------------------------------------------------- -->
                <hr>
                <div id="hr">ข้อมูลนักศึกษา</div>

                <div class="form-row">
                    <div class="form-group" id="regis0">
                        <label for="faculty">คณะ</label>
                        <select class="select" id="faculty" name="faculty">
                            <option selected>&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
                            <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                            <option value="คณะครุศาสตร์">คณะครุศาสตร์</option>
                            <option value="คณะวิทยาการจัดการ">คณะวิทยาการจัดการ</option>
                            <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
                        </select>
                        <!-- <input type="text" name="faculty" id="faculty" required="" value="<? //= set_value('faculty'); 
                                                                                                ?>"> -->
                    </div>

                    <div class="form-group">
                        <label for="name">สาขา</label>
                        <input type="text" name="major" id="major" required="" value="<?= set_value('major'); ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group" id="regis0">
                        <label for="name">หมู่เรียน</label>
                        <input type="text" name="section" id="section" required="" value="<?= set_value('section'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="name">ปีที่เข้าศึกษา</label>
                        <input type="text" name="first_year" id="first_year" required=""
                            value="<?= set_value('first_year'); ?>">
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group" id="regis0">
                        <label for="name">วุฒิการศึกษาสูงสุด</label>
                        <select class="select" id="edu_level" name="edu_level">
                            <option selected>&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <!-- <option value="ประถมศึกษา">ประถมศึกษา</option>
                            <option value="มัธยมศึกษาหรือเทียบเท่า">มัธยมศึกษา หรือ เทียบเท่า</option> -->
                            <option value="อนุปริญญา ภาคปกติ">อนุปริญญา ภาคปกติ</option>
                            <option value="อนุปริญญา ภาคกศ.พป.">อนุปริญญา ภาคกศ.พป.</option>
                            <option value="อนุปริญญา ภาคกศ.พป.(ภาคเช้า)">อนุปริญญา ภาคกศ.พป.(ภาคเช้า)</option>
                            <option value="อนุปริญญา ภาคกศ.พป.(ภาคค่ำ)">อนุปริญญา ภาคกศ.พป.(ภาคค่ำ)</option>
                            <option value="ปริญาญาตรี (4 ปี) ภาคปกติ">ปริญาญาตรี (4 ปี) ภาคปกติ </option>
                            <option value="คณะวิทยาศาสตร์และเทคโนโลยี (สาขาพยาบาลศาสตร์)">คณะวิทยาศาสตร์และเทคโนโลยี
                                (สาขาพยาบาลศาสตร์)</option>
                            <option value="ปริญาญาตรี (4 ปี) ภาคกศ.พป.">ปริญาญาตรี (4 ปี) ภาคกศ.พป.</option>
                            <option value="ปริญาญาตรี (4 ปี) ภาคกศ.พป. วันธรรมดา (ภาคเช้า)">ปริญาญาตรี (4 ปี) ภาคกศ.พป.
                                วันธรรมดา (ภาคเช้า)</option>
                            <option value="ปริญาญาตรี (4 ปี) ภาคกศ.พป. วันธรรมดา (ภาคค่ำ)">ปริญาญาตรี (4 ปี) ภาคกศ.พป.
                                วันธรรมดา (ภาคค่ำ)</option>
                            <option value="วิชาโท">วิชาโท</option>
                            <option value="ปริญาญาตรี (4 ปี) โครงการนักศึกษานานาชาติ">ปริญาญาตรี (4 ปี)
                                โครงการนักศึกษานานาชาติ</option>
                            <option value="ปริญาญาตรี (หลังอนุปริญญา) ภาคปกติ">ปริญาญาตรี (หลังอนุปริญญา) ภาคปกติ
                            </option>
                            <option value="ปริญาญาตรี (หลังอนุปริญญา) ภาคปกติ ภาคค่ำ">ปริญาญาตรี (หลังอนุปริญญา) ภาคปกติ
                                ภาคค่ำ</option>
                            <option value="ปริญาญาตรี (หลังอนุปริญญา) ภาคกศ.พป.">ปริญาญาตรี (หลังอนุปริญญา) ภาคกศ.พป.
                            </option>
                            <option value="ปริญาญาตรี (หลังอนุปริญญา) ภาคกศ.พป. วันธรรมดา (ภาคเช้า)">ปริญาญาตรี
                                (หลังอนุปริญญา) ภาคกศ.พป. วันธรรมดา (ภาคเช้า)</option>
                            <option value="ปริญาญาตรี (หลังอนุปริญญา) ภาคกศ.พป. วันธรรมดา (ภาคค่ำ)">ปริญาญาตรี
                                (หลังอนุปริญญา) ภาคกศ.พป. วันธรรมดา (ภาคค่ำ)</option>
                            <option value="ปริญาญาตรี (5 ปี) ภาคปกติ">ปริญาญาตรี (5 ปี) ภาคปกติ</option>
                            <option value="ปริญาญาตรี (5 ปี) ภาคกศ.พป.">ปริญาญาตรี (5 ปี) ภาคกศ.พป.</option>
                            <option value="ปริญาญาตรี (5 ปี) ภาคกศ.พป. วันธรรมดา (ภาคเช้า)">ปริญาญาตรี (5 ปี) ภาคกศ.พป.
                                วันธรรมดา (ภาคเช้า)</option>
                            <option value="ปริญาญาตรี (5 ปี) ภาคกศ.พป. วันธรรมดา (ภาคค่ำ)">ปริญาญาตรี (5 ปี) ภาคกศ.พป.
                                วันธรรมดา (ภาคค่ำ)</option>
                            <option value="ปริญาญาโท ภาคปกติ">ปริญาญาโท ภาคปกติ</option>
                            <option value="ปริญาญาโท ภาคพิเศษ">ปริญาญาโท ภาคพิเศษ</option>
                            <option value="ปริญาญาเอก ภาคปกติ">ปริญาญาเอก ภาคปกติ</option>
                            <option value="ปริญาญาเอก ภาคพิเศษ">ปริญาญาเอก ภาคพิเศษ</option>
                        </select>
                        <!-- <input type="text" name="edu_level" id="edu_level" required=""
                            value="<? //= set_value('edu_level'); 
                                    ?>"> -->
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group" id="regis0">
                        <label for="name">รหัสนักศึกษา</label>
                        <input type="text" name="stu_id" id="stu_id" required="" value="<?= set_value('stu_id'); ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group" id="regis0">
                        <label for="name">รหัสผ่าน</label>
                        <input type="password" name="password" id="password" required="">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group" id="regis0">
                        <label for="name">ยืนยันรหัสผ่าน</label>
                        <input type="password" name="confpassword" id="confpassword" required="">
                    </div>
                </div>



                <!-- ------------------------------------------(ข้อมูลส่วนบุค)------------------------------------------------------------------------- -->
                <hr>
                <div id="hr">ข้อมูลส่วนบุคล</div>


                <div class="form-row">
                    <div class="form-group">
                        <label for="name" style="width: 61px;">คำนำหน้า</label>
                        <select class="select" id="name_prefix" name="name_prefix">
                            <option selected>&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="นาง">นาง</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">ชื่อ</label>
                        <input type="text" name="FName" id="FName" required="" value="<?= set_value('FName'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="father_name">นามสกุล</label>
                        <input type="text" name="LName" id="LName" required="" value="<?= set_value('lName'); ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group" id="regis0">
                        <label for="FnEng">ชื่อ(อังกฤษตัวใหญ่)</label>
                        <input type="text" name="FName_eng" id="FName_eng" required=""
                            value="<?= set_value('FName_eng'); ?>" onkeyup="upperCharacter()">
                    </div>

                    <div class="form-group">
                        <label for="LnEng">นามสกุล(อังกฤษตัวใหญ่)</label>
                        <input type="text" name="LName_eng" id="LName_eng" required=""
                            value="<?= set_value('LName_eng'); ?>" onkeyup="upperCharacter()">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group" id="regis0">
                        <label for="FnEng">เลขบัตรประชาชน</label>
                        <input type="text" name="id_cardnumber" id="id_cardnumber" required=""
                            value="<?= set_value('id_cardnumber'); ?>">
                    </div>
                    <div style="display:flex; padding-left: 13px;">
                        <label id="sexLabel">เพศ</label>
                        <div class="form-group" id="sexMr">

                            <input class="form-check-input" type="radio" name="sex" value="Mr.">
                            <label id="sexText">ชาย</label>
                        </div>
                        <div class="form-group" id="sexMrs">
                            <input class="form-check-input" type="radio" name="sex" value="Mrs.">
                            <label id="sexText">หญิง</label>
                        </div>
                    </div>
                </div>






                <!-- ------------------------------------(ข้อมูลส่วนตัว)--------------------------------------------------------------------------- -->




                <div class="form-row">
                    <div class="form-group" id="regis0">
                        <label for="name">วันเดือนปีเกิด</label>
                        <input style="width: 200px; height:30px" type="date" name="d_m_y_birth" id="d_m_y_birth"
                            placeholder="" required="" value="<?= set_value('d_m_y_birth'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="name">จังหวัดที่เกิด</label>
                        <input type="text" name="province_birth" id="province_birth" required=""
                            value="<?= set_value('province_birth'); ?>">
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group" id="regis0">
                        <label for="name">สัญชาติ</label>
                        <input style="width: 98px;" type="text" name="nationality" id="nationality" required=""
                            value="<?= set_value('nationality'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="name">ศาสนา</label>
                        <input style="width: 98px;" type="text" name="religion" id="religion" required=""
                            value="<?= set_value('religion'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="name" style="width: 61px;">กรุ๊ปเลือด</label>
                        <select class="select" name="blood_type" id="blood_type">//aria-label="Default select example">
                            <option selected>&nbsp;&nbsp;&nbsp;</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group" id="regis0">
                        <label for="name">เบอร์โทรติดต่อ</label>
                        <input type="text" name="phone_number" id="phone_number" required=""
                            value="<?= set_value('phone_number'); ?>">
                    </div>
                </div>


                <!-- -------------------------------------------(ที่อยู่)---------------------------------------------------------------------------- -->
                <hr>
                <div id="hr">ที่อยู่ปัจจุบัน</div>

                <div class="form-row">
                    <div class="form-group" id="regis0">

                        <!-- <label for="name">ที่อยู่</label>
                        <input style="width: 98px;" type="text" name="Address" id="Address" required="" value="<? //=  set_value('Address'); 
                                                                                                                ?>"> -->

                        <label for="name">บ้านเลขที่ และ หมู่</label>
                        <input style="width: 200px;" type="text" name="Address" id="Address" required=""
                            value="<?= set_value('Address'); ?>" placeholder="เช่น 96/4 ม.18">

                    </div>
                    <div class="form-group">
                        <label for="name">ตำบล</label>
                        <input style="width: 98px;" type="text" name="SubDistrict" id="SubDistrict" required=""
                            value="<?= set_value('SubDistrict'); ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group" id="regis0">
                        <label for="name">อำเภอ</label>
                        <input style="width: 98px;" type="text" name="District" id="District" required=""
                            value="<?= set_value('District'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="name">จังหวัด</label>
                        <input style="width: 98px;" type="text" name="Province" id="Province" required=""
                            value="<?= set_value('Province'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="name">รหัสไปรษณีย์</label>
                        <input style="width: 98px;" type="text" name="Zipcode" id="Zipcode" required=""
                            value="<?= set_value('Zipcode'); ?>">
                    </div>
                </div>



                <div id="btn" onclick="submit()">
                    <button type="submit" id="submit" class="btn btn-primary">ลงทะเบียน</button>
                </div>

            </form>

        </div>


    </div>
    <!-- <br> -->
    <footer class="bg-dark text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3">
            © 2020 Copyright:
            <a class="text" href="#" id="footer_link">ISAC.org</a>
        </div>
        <!-- Copyright -->
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    function upperCharacter() {
        var x = document.getElementById("FName_eng");
        var y = document.getElementById("LName_eng");
        x.value = x.value.toUpperCase();
        y.value = y.value.toUpperCase();
    }

    function submit() {
        var stu_id = $("#stu_id").val();
        var password = $("#password").val();
        var name_prefix = $("#name_prefix").val();
        var FName = $("#FName").val();
        var LName = $("#LName").val();
        var FName_eng = $("#FName_eng").val();
        var LName_eng = $("#LName_eng").val();
        var id_cardnumber = $("#id_cardnumber").val();
        var sex = $("#sex").val();
        var faculty = $("#faculty").val();
        var major = $("#major").val();
        var edu_level = $("#edu_level").val();
        var first_year = $("#first_year").val();
        var d_m_y_birth = $("#d_m_y_birth").val();
        var province_birth = $("#province_birth").val();
        var nationality = $("#nationality").val();
        var religion = $("#religion").val();
        var Address = $("#Address").val();
        var SubDistrict = $("#SubDistrict").val();
        var District = $("#District").val();
        var Province = $("#Province").val();
        var Zipcode = $("#Zipcode").val();
        var phone_number = $("#phone_number").val();


        if (stu_id == '' || password == '' || name_prefix == '' ||
            FName == '' || LName == '' || FName_eng == '' ||
            LName_eng == '' || id_cardnumber == '' || sex == '' ||
            faculty == '' || major == '' || edu_level == '' ||
            first_year == '' || d_m_y_birth == '' || province_birth == '' ||
            nationality == '' || religion == '' || Address == '' ||
            SubDistrict == '' || District == '' || Province == '' ||
            Zipcode == '' || phone_number == '') {
            Swal.fire({
                title: "กรอกข้อมูลไม่ครบ!",
                text: "กรุณาเช็คข้อมูลอีกครั้ง!",
                icon: "warning",
                button: "OK",
            });
            // swal({
            //     title: "กรอกข้ออมูลไม่ครบ!",
            //     text: "กรุณาเช็คข้อมูลอีกครั้ง!!",
            //     icon: "warning",
            //     button: "OK",
            // });

        } else {

            Swal.fire({

                icon: 'success',
                title: 'ลงทะเบียนสำเร็จแล้ว!!',
                showConfirmButton: false,
                timer: 1000000
            });
            // swal({
            //     title: "ลงทะเบียนสำเร็จแล้ว!!",
            //     text: "คลิกที่ปุ่ม!!",
            //     icon: "success",
            //     confirmButtonText: "OK",
            // });

        }

    }


    // $('#btn').click(function() {

    //     var stu_id = $("#stu_id").val();
    //     var password = $("#password").val();
    //     var name_prefix = $("#name_prefix").val();
    //     var FName = $("#FName").val();
    //     var LName = $("#LName").val();
    //     var FName_eng = $("#FName_eng").val();
    //     var LName_eng = $("#LName_eng").val();
    //     var id_cardnumber = $("#id_cardnumber").val();
    //     var sex = $("#sex").val();
    //     var faculty = $("#faculty").val();
    //     var major = $("#major").val();
    //     var edu_level = $("#edu_level").val();
    //     var first_year = $("#first_year").val();
    //     var d_m_y_birth = $("#d_m_y_birth").val();
    //     var province_birth = $("#province_birth").val();
    //     var nationality = $("#nationality").val();
    //     var religion = $("#religion").val();
    //     var Address = $("#Address").val();
    //     var SubDistrict = $("#SubDistrict").val();
    //     var District = $("#District").val();
    //     var Province = $("#Province").val();
    //     var Zipcode = $("#Zipcode").val();
    //     var phone_number = $("#phone_number").val();


    //     if (stu_id == '' || password == '' || name_prefix == '' ||
    //         FName == '' || LName == '' || FName_eng == '' ||
    //         LName_eng == '' || id_cardnumber == '' || sex == '' ||
    //         faculty == '' || major == '' || edu_level == '' ||
    //         first_year == '' || d_m_y_birth == '' || province_birth == '' ||
    //         nationality == '' || religion == '' || Address == '' ||
    //         SubDistrict == '' || District == '' || Province == '' ||
    //         Zipcode == '' || phone_number == '') {
    //         swal({
    //             title: "กรอกข้ออมูลไม่ครบ!",
    //             text: "กรุณาเช็คข้อมูลอีกครั้ง!!",
    //             icon: "warning",
    //             button: "OK",
    //         });
    //     } else {
    //         swal({
    //             title: "ลงทะเบียนสำเร็จแล้ว!!",
    //             text: "คลิกที่ปุ่ม!!",
    //             icon: "success",
    //             button: "OK",
    //         });
    //     }


    // });
    </script>



</body>

</html>