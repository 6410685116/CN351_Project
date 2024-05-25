<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>question</title>
    <style>
        body{
            padding: 10px;
        }

        form{
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .label-group{
            display: flex;
            flex-direction: column;
            text-align: end;
        }

        .input-group{
            margin-bottom: 1px;
        }

        textarea {
            resize: none;
        }
    </style>
</head>

<body>
    <form action="output.php" method='POST'>
        <div class="label-group">
            <label for="fullname">ชื่อ นามสกุล</label>
            <label>เพศ</label>
            <label>วัน/เดือน/ปีเกิด</label>
            <label for="job">อาชีพ</label>
            <label for="address">ที่อยู่(ตามบัตรประชาชน)</label>
            <div style="margin-bottom: 4.2em;"></div>
            <label for="province">จังหวัด</label>
            <label for="tel">โทร</label>
        </div>

        <div class='input-group'>
            <input type="text" id="fullname" name="fullname">
            <br>
            
            <input type="radio" name="gender" id="male" value="male" ><label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female" ><label for="female">Female</label>
            <br>

            <select name="day">
                <option disabled selected value>วัน</option>
                <?php for($i = 1; $i <= 31; $i++): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor ?>


            </select>
            <select name="month">
                <option disabled selected value>เดือน</option>
                <option value="มกราคม">มกราคม</option>
                <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                <option value="มีนาคม">มีนาคม</option>
                <option value="เมษายน">เมษายน</option>
                <option value="พฤษภาคม">พฤษภาคม</option>
                <option value="มิถุนายน">มิถุนายน</option>
                <option value="กรกฎาคม">กรกฎาคม</option>
                <option value="สิงหาคม">สิงหาคม</option>
                <option value="กันยายน">กันยายน</option>
                <option value="ตุลาคม">ตุลาคม</option>
                <option value="พฤศจิกายน">พฤศจิกายน</option>
                <option value="ธันวาคม">ธันวาคม</option>
            </select>
            <select name="year">
                <option disabled selected value>ปี พ.ศ.</option>

                <?php for( $i=2567; $i >=2500; $i-- ): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor ?>
            </select>
            <br>



            <select name="job" id="job">
                <option value="นักศึกษา">นักศึกษา</option>
                <option value="พนักงานบริษัท">พนักงานบริษัท</option>
                <option value="รับราชการ">รับราชการ</option>
                <option value="ธุรกิจส่วนตัว">ธุรกิจส่วนตัว</option>
                <option value="อื่นๆ">อื่นๆ</option>
            </select>
            <br>



            <textarea name="address" id="address" cols="20" rows="5" ></textarea>
            <br>

            <input type="text" id="province" name="province" >
            <br>

            <input type="text" id="tel" name="tel" >
            <br>

            <input type="submit" value="ส่งข้อมูล">
            <input type="reset">
        </div>
        
    </form>
</body>

</html>