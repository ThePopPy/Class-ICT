<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Bar Cafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   <link rel="stylesheet" href="L5style.css">
  </head>

<body>
    <!-- สร้างเมนู -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="L5index.php" class="navbar-brand">Technology Co., Ltd.</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbar1" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="L5index.php" class="nav-link">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">สินค้า</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">เกี่ยวกับเรา</a>
                    </li>
                 </ul>
            </div>
        </div>
    </nav>
    <!-- การสร้าง Slider -->
    <section id="slider">
        <div class="carousel slide" data-bs-ride="carousel" id="mySlider">
            <ol class="carousel-indicators">
                <button data-bs-target="#mySlider" data-bs-slide-to="0"></button>
                <button data-bs-target="#mySlider" data-bs-slide-to="1"></button>
                <button data-bs-target="#mySlider" data-bs-slide-to="2" class="active"></button>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image-1">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                        <i class="fas fa-user-tie fa-3x mb-2"></i>
                            <h1 class="display-3">ผลประโยชน์ที่แฟรนไชส์ซี่จะได้รับ</h1>
                            <p>สิทธิในการใช้ชื่อตราสินค้าและเครื่องหมายการค้าของดอยช้างคาเฟ่ ในทางธุรกิจ</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-2">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                        <i class="fas fa-camera fa-3x mb-2"></i>
                            <h1 class="display-3">ผลประโยชน์ที่แฟรนไชส์ซี่จะได้รับ</h1>
                            <p>ระบบ POS ที่ช่วยให้บริหารงานได้อย่างมีประสิทธิภาพ</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-3 active">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                        <i class="fas fa-photo-video fa-3x mb-2"></i>
                            <h1 class="display-3">ผลประโยชน์ที่แฟรนไชส์ซี่จะได้รับ</h1>
                            <p>สิทธิในการซื้อผลิตภัณฑ์ วัตถุดิบต่างๆ ในราคาพิเศษ</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" data-bs-target="#mySlider" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                 </button>
                <button class="carousel-control-next" data-bs-target="#mySlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- Service Section -->
    <section id="service" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <i class="fas fa-user-tie fa-3x mb-2"></i>
                    <h3>Fairtrade</h3>
                    <p>ตรารับรองจากองค์กรอิสระสากลที่มุ่งหวังที่ช่วยเหลือให้ผู้ผลิตหรือเกษตรกรได้รับค่าตอบแทนของผลผลิตที่เหมาะสมและเป็นธรรม เพื่อจะสามารถผลิตสินค้าที่มีคุณภาพได้ในระยะยาว โดยตราสัญลัษณ์แฟร์เทรด เป็นการรับรองคุณภาพสินค้าว่าสินค้านั้นได้ปฏิบัติตามเงื่อนไขขององค์กรแฟร์เทรดสากล</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <i class="fas fa-camera fa-3x mb-2"></i>
                    <h3>EU Organic farming</h3>
                    <p>มาตรฐานเกษตรอินทรีย์สหภาพยุโรป หน่วยงานที่กํากับดูแลเกี่ยวกับมาตร ฐานการผลิตพืชและสัตว์เกษตรอินทรีย์ ตรวจรับรองการนําเข้าผลิตภัณฑ์ เกษตรอินทรีย์จากต่างประเทศของสหภาพยุโรป</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <i class="fas fa-photo-video fa-3x mb-2"></i>
                    <h3>USDA ORGANIC</h3>
                    <p>ตรารับรองคุณภาพที่ส่งเสริมและช่วยเหลือการทําเกษตรเชิงอินทรีย์ โดยตรารับรองดังกล่าวจะให้รับรองว่าสินค้านั้นมีการเพาะปลูก และบริหารจัดการพื้นที่ปลูกภายใต้ข้อกําหนดของกระทรวงเกษตรของสหรัฐอเมริกา ซึ่งจะปราศจากการใช้ฮอร์โมนช่วยในการเติบโตและยาปฏิชีวนะ
                        รวมไปถึงวิธีการปลูกที่ไม่ส่งผลกระทบต่อสิ่งแวดล้อม
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->
    <section id="about" class="p-5">
        <div class="dark-overlay">
            <div class="row">
                <div class="col">
                    <div class="container pt-5">
                        <h1>ที่มาของชื่อ "Coffe Bar Cafe"</h1>
                        <p>การเลือกใช้ชื่อ Coffe Bar Cafe เป็นชื่อของตราสินค้า เพื่อเป็นการให้เกียรติแก่ถิ่นกำเนิดของกาแฟ ซึ่งพื้นที่เพาะปลูกกาแฟนั้นตั้งอยู่ในพื้นที่บริเวณบ้านปากพนัง อ.แม่กิ้มลั้ง จ.นครศรีธรรมราช โดยครอบคลุมพื้นที่เพาะปลูกกาแฟอราบิก้าและทำเกษตรกรรมรวมประมาณ
                            50,000 ไร่</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallary -->
    <section id="gallary" class="p-5">
        <div class="container">
            <h1 class="text-center">ผลิตภัณฑ์กาแฟ</h1>
            <p class="text-center">ในแต่ละกระบวนการผลิตและแปรรูปกาแฟดอยช้าง เริ่มต้นตั้งแต่การปลูก การเก็บผลกาแฟสดจากต้นด้วยมือ กระบวนการแปรรูปแบบเปียกถูกคัดสรรจนได้ขั้นตอนที่เหมาะสมที่สุดในการสร้างสรรค์รสชาติจนทำให้กาแฟของดอยช้างเป็นกาแฟอราบิก้าชนิดพิเศษ (Specialty coffee)
                ที่ปลูกเฉพาะบริเวณดอยช้างเท่านั้น โดยได้ตรารับรองมาตรฐานระดับสากลมากมายด้วยเอกลักษณ์เฉพาะตรงกลิ่นที่หอมเป็นพิเศษ เจือรสเปรี้ยว (กรดจากผลไม้) ที่ดื่มแล้วทำให้รู้สึกชุ่มคอ มีสารคาเฟอีนต่ำ มีรสชาติที่กลมกล่อมสูง เป็นความลงตัวระหว่างพื้นที่เพาะปลูกกับลักษณะภูมิประเทศที่เป็นที่สูงและมีอากาศหนาวเย็นตลอดปี
                ประกอบกับการดูแลเอาใจใส่ในทุกขั้นตอน ทำให้ได้กาแฟอราบิก้าที่มีคุณภาพสูง ดังคำกล่าวที่ว่า “กาแฟดอยช้าง เอกลักษณ์กาแฟไทย สุดยอดกาแฟโลก”</p>
            <!-- Image -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/894695/pexels-photo-894695.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/606545/pexels-photo-606545.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/1459339/pexels-photo-1459339.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/92354/pexels-photo-92354.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/144253/coffee-coffee-cup-porcelain-coffee-beans-144253.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/2159106/pexels-photo-2159106.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/1132586/pexels-photo-1132586.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/1556665/pexels-photo-1556665.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/1191324/pexels-photo-1191324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer">
        <p>Copyright &copy; 2025 Technology Co., Ltd. </p>
    </section>

</body>

</html>