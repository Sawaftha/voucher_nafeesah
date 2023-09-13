<?php include('includes/functions.php'); ?>
<style>
	* {
    font-size: 14px;
    font-family: 'Times New Roman';
}

td,
th,
tr,
table {
    border-top: 1px solid black;
    border-collapse: collapse;
}

td.description,
th.description {
    width: 100px;
    max-width: 100px;
    text-align: right;
    font-weight: bold;
}

td.quantity,
th.quantity {
    width: 100px;
    max-width: 100px;
    word-break: break-all;
    text-align: right;
}


.centered {
    text-align: center;
    align-content: center;
    font-size: 12px;
}

.ticket {
    width: 220px;
    max-width: 220px;
}

img {
    max-width: inherit;
    width: inherit;
}

@media print {
    .hidden-print,
    .hidden-print * {
        display: none !important;
    }
}
</style>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>Receipt example</title>
    </head>
    <body>
        <div class="ticket">
            <img src="assets/images/Nafessah_logo_rescet.png" alt="Logo">
            <p class="centered">إيصال  رهن مسترد القيمة
                <br>فرع خلدا
            </p>
            <table>
                <thead>
                    <tr>//test 
                        <th class="quantity">التفاصيل</th>
                        <th class="description">البيان</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="quantity"><?php $row=get_invoice($_GET['id']); echo $row['invoice_date'];?></td>
                        <td class="description">تاريخ الإيصال </td>
                      
                    </tr>
                    <tr>
                    <td class="quantity"><?php $row=get_invoice($_GET['id']); echo $row['invoice_number'];?></td>
                        <td class="description">رقم الإيصال</td>
                    </tr>
                    <tr>
                    <td class="quantity"><?php $row=get_invoice($_GET['id']); echo $row['invoice_amm'];?></td>
                        <td class="description">قيمة الرهن</td>
                    </tr>
                    <tr>
                    <td class="quantity"><?php $row=get_invoice($_GET['id']); echo $row['customer_name'];?></td>
                        <td class="description">إسم العميل</td>
                    </tr>
                    <tr>
                    <td class="quantity"><?php echo $_SESSION['name'];?></td>
                        <td class="description">إسم منظم الوصل</td>
                    </tr>
                </tbody>
            </table>
            <p class="centered">للملاحظات والتواصل
                <br>550 8 550</p>
                <p class="centered">يعتبر هذا الوصل ساري المفعول لمدة 30 يوم من تاريخه<br>يرجى الإحتفاظ بالوصل لإسترداد قيمته</p>
        </div>
     
        <img src="assets/images/QR_code_facebook.png" width="800" height="50" alt="QR" text-align="center">
       <img src="assets/images/QR_code_website.png" width="800" height="50" alt="QR" text-align="center">
                  
        
        <br>
        <button id="btnPrint" class="hidden-print">Print</button>
        <script src="script.js"></script>
    </body>
</html>
<script>

const $btnPrint = document.querySelector("#btnPrint");
$btnPrint.addEventListener("click", () => {
    window.print();
});
</script>
	