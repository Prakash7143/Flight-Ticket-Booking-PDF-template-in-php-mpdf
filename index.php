<?php

include('mpdf/vendor/autoload.php');

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8','format' => 'A4','margin_left' => 12,'margin_right' => 12,
'margin_top' => 18,'margin_bottom' => 18,'margin_header' => 0,'margin_footer' => 0]);
$mpdf-> SetTitle('Flight Ticket -Demonstration');

$mpdf->AddPage();
$mpdf->text_input_as_HTML = true; 
$return_flight = 1;
$via = 1;



$mpdf->WriteHTML('
    <style>
    .booked { border:1px solid #707070; height:100px; width:96%;  border-radius:none; }
    .bookBy {height:30px; text-align:center; letter-spacing: .5;color: #3C3C3C; font-family: \'Roboto\', sans-serif; }
    .br { border-right: 1px solid #707070; font-family: \'Roboto\', sans-serif;}
    .bks{width:200px; font-family: \'Roboto\', sans-serif;color: #3C3C3C; text-align:center; }
    </style>
    <div style="border:1px solid #707070;">
        <p style="color:#0067B2; font-size:28px; text-align:center;font-family: \'Roboto\', sans-serif; margin-top:-1px;"><b>TICKET CONFIRMED</b></p>
        <table cellspacing="0" style="margin:5px 10px 0 12px; width:92%;font-family: \'Roboto\', sans-serif; color:#404040">
                <tr style="width:720px;">
                    <td style="float:left;width:520px; color:#0067B2; font-weight:regular;text-transform: uppercase;font-size:14px;">FLIGHT DETAILS(ONWARDS)</td>
                    <td style="float:right;padding-left:45px; width:200px;color:#0067B2;font-weight:regular;text-transform: uppercase;font-size:14px;">
                    BOOKING ID=1526524</td>
                </tr>
        </table>

        <div class="booked" style="margin:5px 10px 0 13px;">
            <table cellspacing="0">
                <tr style="background: #B2B2B2; height:28px; width:800px;">
                    <td class="bookBy br"><b>FLIGHT DETAILS</b></td>
                    <td class="bks br"><b>DEPARTURE</b></td>
                    <td class="bks"><b>ARRIVAL</b></td>
                </tr>
                <tr style="width:800px;">
                    <td style="width:350px; height:90px; text-align:center; border-right:1px solid #707070">
                        <img src="images/indigo.png" style="height:60px; width:60px;"><br><br>
                        <p style="font-family: \'Roboto\', sans-serif; text-transform:capitalize;">indigo Airlines</p>
                    </td>
                    <td style="width:200px;font-family: \'Roboto\', sans-serif;  text-align:center; border-right:1px solid #707070">
                        <span>BLR</span><br>
                        <span style="color:#4d4d33">Bangalore</span><br>
                        <span style="color:#4d4d33">DEC 30, 2019 &nbsp;&nbsp;&nbsp;11:30 PM</span><br>
                    
                    </td>
                    <td style="width:200px;font-family: \'Roboto\', sans-serif;  text-align:center;">
                        <span>BOM</span><br>
                        <span style="color:#4d4d33">(Mumbai)</span><br>
                        <span style="color:#4d4d33">DEC 31, 2019 &nbsp;&nbsp;&nbsp;00: 45 AM</span><br>
                    </td>
                </tr>
                '.($via != '' ? "<tr style=\"width:800px;\">
                <td style=\"width:350px; height:90px; text-align:center; border-top:1px solid #707070; border-right:1px solid #707070\">
                    <img src=\"images/airin.jpg\" style=\"height:60px; width:60px; border-radius:50px;\"><br><br>
                    <p style=\"font-family: \'Roboto\', sans-serif; text-transform:capitalize;\">Air India</p>
                </td>
                <td style=\"width:200px;font-family: \'Roboto\', sans-serif; border-top:1px solid #707070; text-align:center; border-right:1px solid #707070\">
                    <span>BLR</span><br>
                    <span style=\"color:#4d4d33\">Bangalore</span><br>
                    <span style=\"color:#4d4d33\">DEC 30, 2019 &nbsp;&nbsp;&nbsp;11:30 PM</span><br>
                </td>
                <td style=\"width:200px;font-family: \'Roboto\', sans-serif;  border-top:1px solid #707070;  text-align:center;\">
                    <span>BOM</span><br>
                    <span style=\"color:#4d4d33\">(Mumbai)</span><br>
                    <span style=\"color:#4d4d33\">DEC 31, 2019 &nbsp;&nbsp;&nbsp;00: 45 AM</span><br>
                </td>
            </tr>" : "").'

            </table>
        </div>
        <p style="color:#0067B2; font-size:14px;font-family: \'Roboto\', sans-serif; margin:30px 8px 2px 12px;">PASSENGER DETAILS</p>
        <div class="booked" style="margin:5px 10px 0 13px; height:auto;">
            <table cellspacing="0">
                <tr style="background: #B2B2B2; height:32px; width:800px;">
                    <td class="bookBy br" style="width:275px;"><b>NAME</b></td>
                    <td class="bks br" style="width:175px;"><b>PNR</b></td>
                    <td class="bks br" style="width:175px;"><b>E-TICKET NO</b></td>
                    <td class="bks" style="width:175px;"><b>TOTAL FARE</b></td>
                </tr>
                <tr style="width:800px;">
                    <td style="font-family: \'Roboto\', sans-serif; width:275px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070">mr. sathya prakash</td>
                    <td style="font-family: \'Roboto\', sans-serif; width:175px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070">xxyzrc</td>
                    <td style="font-family: \'Roboto\', sans-serif; width:175px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070">xyzrcsd</td>
                    <td style="font-family: \'Roboto\', sans-serif; width:175px; text-transform:uppercase; height:40px; text-align:center; ">inr 1500</td>
                </tr>
                <tr style="width:800px;">
                    <td style="font-family: \'Roboto\', sans-serif; width:275px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070">mrs. shivani zutshi</td>
                    <td style="font-family: \'Roboto\', sans-serif; width:175px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070">xxyzrc</td>
                    <td style="font-family: \'Roboto\', sans-serif; width:175px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070">xyzrcsd</td>
                    <td style="font-family: \'Roboto\', sans-serif; width:175px; text-transform:uppercase; height:40px; text-align:center; ">inr 1500</td>
                </tr>

            </table>
        </div>
        <p style="color:#0067B2; font-size:14px;font-family: \'Roboto\', sans-serif; margin:30px 8px 2px 12px;">BAGGAGE INFORMATION</p>
        <div class="booked" style="margin:5px 10px 0 13px; height:auto;">
            <table cellspacing="0">
                <tr style="background: #B2B2B2; height:32px; width:810px;">
                    <td class="bookBy br" style="width:270px;"><b>TYPE</b></td>
                    <td class="bks br" style="width:270px;"><b>SECTOR</b></td>
                    <td class="bks" style="width:270px;"><b>CHECK-IN</b></td>
                </tr>
                <tr style="width:800px;">
                    <td style="font-family: \'Roboto\', sans-serif; width:270px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070">ADULT </td>
                    <td style="font-family: \'Roboto\', sans-serif; width:270px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070">BLR-GOI</td>
                    <td style="font-family: \'Roboto\', sans-serif; width:270px; text-transform:uppercase; height:40px; text-align:center; ">15 kg</td>
                </tr>
                <tr style="width:800px;">
                    <td style="font-family: \'Roboto\', sans-serif; width:270px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070">child</td>
                    <td style="font-family: \'Roboto\', sans-serif; width:270px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070">blr-goi</td>
                    <td style="font-family: \'Roboto\', sans-serif; width:270px; text-transform:uppercase; height:40px; text-align:center; ">15kg</td>
                </tr>

            </table>
        </div>
        '.($return_flight != '' ? "
        <p style=\"color:#0067B2; font-size:14px;font-family: \'Roboto\', sans-serif; margin:60px 8px 2px 12px;\">FLIGHT DETAILS &nbsp;(RETURN)</p>
        <div class=\"booked\" style=\"margin:5px 10px 0 13px;\">
        <table cellspacing=\"0\">
            <tr style=\"background: #B2B2B2; height:28px; width:800px;\">
                <td class=\"bookBy br\"><b>FLIGHT DETAILS</b></td>
                <td class=\"bks br\"><b>DEPARTURE</b></td>
                <td class=\"bks\"><b>ARRIVAL</b></td>
            </tr>
            <tr style=\"width:800px;\">
                <td style=\"width:350px; height:90px; text-align:center; border-right:1px solid #707070\">
                    <img src=\"images/indigo.png\" style=\"height:60px; width:60px;\">
                    <p style=\"font-family: \'Roboto\', sans-serif; text-transform:capitalize;\">indigo Airlines</p>
                </td>
                <td style=\"width:200px;font-family: \'Roboto\', sans-serif;  text-align:center; border-right:1px solid #707070\">
                    <span>BLR</span><br>
                    <span style=\"color:#4d4d33\">Bangalore</span><br>
                    <span style=\"color:#4d4d33\">DEC 30, 2019 &nbsp;&nbsp;&nbsp;11:30 PM</span><br>
                
                </td>
                <td style=\"width:200px;font-family: \'Roboto\', sans-serif;  text-align:center;\">
                    <span>BOM</span><br>
                    <span style=\"color:#4d4d33\">(Mumbai)</span><br>
                    <span style=\"color:#4d4d33\">DEC 31, 2019 &nbsp;&nbsp;&nbsp;00: 45 AM</span><br>
                </td>
            </tr>
          

        </table>
    </div>
    <p style=\"color:#0067B2; font-size:14px;font-family: \'Roboto\', sans-serif; margin:30px 8px 2px 12px;\">PASSENGER DETAILS</p>
    <div class=\"booked\" style=\"margin:5px 10px 0 13px; height:auto;\">
        <table  cellspacing=\"0\">
            <tr style=\"background: #B2B2B2; height:32px; width:800px;\">
                <td class=\"bookBy br\" style=\"width:275px;\"><b>NAME</b></td>
                <td class=\"bks br\" style=\"width:175px;\"><b>PNR</b></td>
                <td class=\"bks br\" style=\"width:175px;\"><b>E-TICKET NO</b></td>
                <td class=\"bks\" style=\"width:175px;\"><b>TOTAL FARE</b></td>
            </tr>
            <tr style=\"width:800px;\">
                <td style=\"font-family: \'Roboto\', sans-serif; width:275px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070\">mr. sathya prakash</td>
                <td style=\"font-family: \'Roboto\', sans-serif; width:175px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070\">xxyzrc</td>
                <td style=\"font-family: \'Roboto\', sans-serif; width:175px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070\">xyzrcsd</td>
                <td style=\"font-family: \'Roboto\', sans-serif; width:175px; text-transform:uppercase; height:40px; text-align:center; \">inr 1500</td>
            </tr>
            <tr style=\"width:800px;\">
                <td style=\"font-family: \'Roboto\', sans-serif; width:275px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070\">mrs. shivani zutshi</td>
                <td style=\"font-family: \'Roboto\', sans-serif; width:175px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070\">xxyzrc</td>
                <td style=\"font-family: \'Roboto\', sans-serif; width:175px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070\">xyzrcsd</td>
                <td style=\"font-family: \'Roboto\', sans-serif; width:175px; text-transform:uppercase; height:40px; text-align:center; \">inr 1500</td>
            </tr>

        </table>
    </div>
    <p style=\"color:#0067B2; font-size:14px;font-family: \'Roboto\', sans-serif; margin:30px 8px 2px 12px;\">BAGGAGE INFORMATION</p>
    <div class=\"booked\" style=\"margin:5px 10px 0 13px; height:auto;\">
        <table  cellspacing=\"0\">
            <tr style=\"background: #B2B2B2; height:32px; width:810px;\">
                <td class=\"bookBy br\" style=\"width:270px;\"><b>TYPE</b></td>
                <td class=\"bks br\" style=\"width:270px;\"><b>SECTOR</b></td>
                <td class=\"bks\" style=\"width:270px;\"><b>CHECK-IN</b></td>
            </tr>
            <tr style=\"width:800px;\">
                <td style=\"font-family: \'Roboto\', sans-serif; width:270px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070\">ADULT </td>
                <td style=\"font-family: \'Roboto\', sans-serif; width:270px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070\">BLR-GOI</td>
                <td style=\"font-family: \'Roboto\', sans-serif; width:270px; text-transform:uppercase; height:40px; text-align:center; \">15 kg</td>
            </tr>
            <tr style=\"width:800px;\">
                <td style=\"font-family: \'Roboto\', sans-serif; width:270px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070\">child</td>
                <td style=\"font-family: \'Roboto\', sans-serif; width:270px; text-transform:uppercase; height:40px; text-align:center; border-right:1px solid #707070\">blr-goi</td>
                <td style=\"font-family: \'Roboto\', sans-serif; width:270px; text-transform:uppercase; height:40px; text-align:center; \">15kg</td>
            </tr>

        </table>
    </div>
        
        " : "").'
       

        <div style="border:1px solid #707070; width:96%; margin:15px 10px 50px 13px">
                <div style="background:#0965B2; color:#fff; height:28px;font-family: \'Roboto\', sans-serif; padding:6px 0 0 10px;">IMPORTANT INFORMATION</div>
            <table  cellspacing="0">
                <tr><td style="height:25px; color:#7E7E7E; padding:4px 10px;font-family: \'Roboto\', sans-serif;">Check-in Time : Check-in desks will close 1 hour before departure</td></tr>
                <tr><td style="height:25px; color:#7E7E7E; padding:4px 10px;font-family: \'Roboto\', sans-serif;">Valid ID proof needed : Carry a valid photo identification Proof</td></tr>
                <tr><td style="height:25px; color:#7E7E7E; padding:4px 10px;font-family: \'Roboto\', sans-serif;">Web Check-in (opens 48 hrs before departure)</td></tr>
                <tr><td style="height:25px; color:#7E7E7E; padding:4px 10px;font-family: \'Roboto\', sans-serif;">To Cancel or Modify this booking visit- <a  href="#" target="_blank">AirTravels Site</a></td></tr>
                <tr><td style="height:25px; color:#7E7E7E; padding:4px 10px;font-family: \'Roboto\', sans-serif;">You have paid : INR— <b>3000.00</b></td></tr>
            </table>
        </div>
        
    </div>
');
    

    

$title = 'Airline-ticket-demo.pdf';
$mpdf -> Output($title, 'I');

?>
    