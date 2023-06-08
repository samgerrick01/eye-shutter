<html>
<style>
#term1 {
	background-color:gray;
	padding: 10px 10px 10px 10px;
}
</style>
<body bgcolor="gray">
<div id="term1">
<table width="550px">
<tr>
	<td></td>
</tr>
</table>
<?php
$id = $_GET['id'];
if($id=="1") {
	echo '<h3 style="color:#000;">RESERVATION</h3>';
	echo '<br>';
	echo '<p  style="color:#000;"> A signed contract and retainer fee is required to reserve the dates and times of the event. If the event is rescheduled, postponed, or cancelled; or if there is a breach of contract by the clients, the retainer fee is non-refundable and shall be liquidated damages to the company. The clients shall also be responsible for payment for any of the company’s materials charges incurred up to time of cancellation.</p>';
}
if ($id=="2") {
	echo '<h3 style="color:#000;">BOOKING FEE/ DEPOSIT</h3>';
	echo'<p  style="color:#000;"> The booking fee is due on signing this agreement (Booking Fee is 50% of the amount agreed with the maximum of Php[Booking Fee Maximum]). In the events of the clients cancelling the event for whatever reason the booking fee is non-refundable. It will be considered as liquidated damages to the photographers.</p>';
}
if ($id=="3") {
	echo'<h3 style="color:#000;">SOFT AND HARD COPY RELEASE</h3>';
	echo'<p  style="color:#000;">The clients agree that the release of picture’s soft copies is between two to three weeks after the event and two to three months for album and video.</p>';
}
if ($id=="4") {
	echo'<h3 style="color:#000;">MODE OF PAYMENTS</h3>';
	echo'<p  style="color:#000;"> The aforementioned 50% non-refundable retainer fee is due at the time of signing of agreement. The remaining 25% is payable two to three weeks before or on the event and 25% after getting the soft copy. In the client fails to remit payment as specified, the company shall have the right to immediately terminate this agreement with no further obligation, retain and monies already paid, and not give any copies to the clients.</p>';
}
if ($id=="5") {
	echo'<h3 style="color:#000;">PRICING</h3>';
	echo'<p  style="color:#000;"> Services or merchandise not included this initial contract will be sold at the current price when the order is placed. All prices are subject to change at any time without notice. Credit vouchers have no intrinsic cash value and may only be applied toward merchandise purchased from the company.</p>';
}
if ($id=="6") {
	echo'<h3 style="color:#000;">CONFIRMATION</h3>';
	echo'<p  style="color:#000;"> A signed Contract for Photography Services and payment of the booking fee are necessary to confirm the stated event services from the photographer.</p>';
}
if ($id=="7") {
	echo'<h3 style="color:#000;">PRE-EVENT CONSULTATION</h3>';
	echo'<p  style="color:#000;">This normally happens at the time of booking. The clients will outline broadly what is required and the photographer will advise on planning, logistics and timings where needed. If required the clients are welcome to pop in for an additional chat closer to the time of the wedding (about a week) to iron out the remaining details.</p>';
}
if ($id=="8") {
	echo'<h3 style="color:#000;">COOPERATION</h3>';
	echo'<p  style="color:#000;">The clients and the photographer consent to the happily cooperating and communicating with to each other to achieve the best possible result within the understanding of this contract. We recommend that the photographer be provided with a helper who will point out key individuals to be photographed. The photographer may also require the assistance of the helper in organizing family groups. The clients also agree to the photographer sufficient warning of key events at the wedding to give the photographer time to prepare e. g. Bouquet throwing, cutting the cake, speeches etc. Please note that not all the guests at the event like having their photo taken. I such cases the photographer will use his discretion but cannot be held responsible for a lack of photos of these people.</p>';
}
if ($id=="9") {
	echo'<h3 style="color:#000;">THE SCHEDULE</h3>';
	echo'<p  style="color:#000;">Our shooting schedule, style of working and experience are designed to achieve a great set of event photos for the clients, accomplished with good humour and enjoyed by all concerned. Both the clients and the photographers therefore agree that punctuality and cheerful cooperation are essential to producing outstanding photographic results. In cases where the wedding does not run on time (for example, extreme lateness by one of the clients arriving to the church) we cannot guarantee to take our normal set of photos although in such circumstances we will do our absolutely best to compensate. </p>';
}
if ($id=="10") {
	echo'<h3 style="color:#000;">PAPARAZZI GUESTS</h3>';
	echo'<p  style="color:#000;">All your guests will have digital cameras and all your guests will want to photograph the clients. In the spirit of cheerful cooperation the clients agree to give the photographers precedence over the guests in order to take the photographs required for the wedding services described above. We cannot be held liable for a lack of wedding photos if guests taking their own photos of the clients continually interrupt the photographer’s work.</p>';
}
if ($id=="11") {
	echo'<h3 style="color:#000;">HOUSE RULES</h3>';
	echo'<p  style="color:#000;">Note the photographers are sometimes limited by rules imposed by registrars, ministers and venue management as to what can and cannot be done. For example some ministers insist that no flash photography is allowed, and others will insist that the photographers shoot from a specific location. In such circumstances the clients agree to accept the technical limitations that may be imposed on the equipment used. We advise the clients to make themselves aware of the rules of the venue concerned and if necessary negotiate with the personnel concerned.</p>';
}
if ($id=="12") {
	echo'<h3 style="color:#000;">COPYRIGHT LAW</h3>';
	echo'<p  style="color:#000;">The copyright of photographs remains with the photographer. The photographer grants the clients permission to copies of the images under the following conditions. The images taken by the photographer are for personal use by the clients and their friends and relatives. Sale, publication or any commercial use of the photographs is not allowed without prior written permission from the photographer.</p>';
}
if ($id=="13") {
	echo'<h3 style="color:#000;">MODEL RELEASE</h3>';
	echo'<p  style="color:#000;">The clients grant the photographer and its legal representatives, heirs and assigns, the irrevocable and unlimited consent to use the photographs of the clients for editorial, competition, advertising and any other purpose and in any manner, to alter the photographs without restriction; and to copyright the images. The clients hereby release the photographer and its legal representatives; heirs and assigns from all liability and claims in connection with the images.</p>';
}
if ($id=="14") {
	echo'<h3 style="color:#000;">LIMIT OF LIABILITY</h3>';
	echo'<p  style="color:#000;">If the photographer is too ill or becomes injured and cannot supply the event services specified above the photographer will try to book a replacement photographer. Under normal circumstances a second photographer from the photographer is there for the day anyway and this photographer will then shoot the day on his/her own. If both photographers are unavailable and a replacement photographer cannot be found then liability is limited to refund of any payments received. The photographers have working methods in place to prevent loss or damage to your images. However, there is the unlikely possibility that images may be lost, stolen or destroyed for reasons or in beyond our control. In these circumstances liability is limited to the return of fees paid for the service or part thereof according to the percentage of images supplied.</p>';
}
if ($id=="15") {
	echo'<h3 style="color:#000;">CD/DVD STORAGE</h3>';
	echo'<p  style="color:#000;">Due to the lack of information about how long CDs/DVDs can hold information, the photographer recommends you back up your images on another media format other than CD or DVD. The photographer also recommends making multiple copies of CDs/DVs every year to insure the images for years to come. The photographer cannot be held responsible for the failure of CDs/DVs due to the mishandling. It is the client responsibility to keep several copies of any CDs/DVDs in more than one location, and back the images up on another format such as a hard drive.</p>';
}



?>
<br><br><br><br><br>
</div>
</body>