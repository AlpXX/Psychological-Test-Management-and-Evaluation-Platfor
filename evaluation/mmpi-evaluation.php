<?php
include '../includes/connect.php';
$p_id=$_SESSION["p_id"];

if(!isset($_SESSION["loggedin_patient"]) && $_SESSION["loggedin_patient"] !== true){
	header("location: index.php");
	exit;
  }

$sql = "SELECT p_identity,p_gender FROM patient WHERE p_id='$p_id';";
$result=mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result)){
        
    echo $row['p_gender'];
    $gender=$row['p_gender'];
    $identity=$row['p_identity'];
    
   
}
echo $gender;
$answer1 = $_POST['answer1']; echo $answer1;
$answer2 = $_POST['answer2']; echo $answer2;
$answer3 = $_POST['answer3']; echo $answer3;
$answer4 = $_POST['answer4'];  echo $answer4;
$answer5 = $_POST['answer5'];
$answer6 = $_POST['answer6'];
$answer7 = $_POST['answer7'];
$answer8 = $_POST['answer8'];
$answer9 = $_POST['answer9'];
$answer10 = $_POST['answer10'];
$answer11 = $_POST['answer11'];
$answer12 = $_POST['answer12'];
$answer13 = $_POST['answer13'];
$answer14 = $_POST['answer14'];
$answer15 = $_POST['answer15'];
$answer16 = $_POST['answer16'];
$answer17 = $_POST['answer17'];
$answer18 = $_POST['answer18'];
$answer19 = $_POST['answer19'];
$answer20 = $_POST['answer20'];
$answer21 = $_POST['answer21'];
$answer22 = $_POST['answer22'];
$answer23 = $_POST['answer23'];
$answer24 = $_POST['answer24'];
$answer25 = $_POST['answer25'];
$answer26 = $_POST['answer26'];
$answer27 = $_POST['answer27'];
$answer28 = $_POST['answer28'];
$answer29 = $_POST['answer29'];
$answer30 = $_POST['answer30'];
$answer31 = $_POST['answer31'];
$answer32 = $_POST['answer32'];
$answer33 = $_POST['answer33'];
$answer34 = $_POST['answer34'];
$answer35 = $_POST['answer35'];
$answer36 = $_POST['answer36'];
$answer37 = $_POST['answer37'];
$answer38 = $_POST['answer38'];
$answer39 = $_POST['answer39'];
$answer40 = $_POST['answer40'];
$answer41 = $_POST['answer41'];
$answer42 = $_POST['answer42'];
$answer43 = $_POST['answer43'];
$answer44 = $_POST['answer44'];
$answer45 = $_POST['answer45'];
$answer46 = $_POST['answer46'];
$answer47 = $_POST['answer47'];
$answer48 = $_POST['answer48'];
$answer49 = $_POST['answer49'];
$answer50 = $_POST['answer50'];
$answer51 = $_POST['answer51'];
$answer52 = $_POST['answer52'];
$answer53 = $_POST['answer53'];
$answer54 = $_POST['answer54'];
$answer55 = $_POST['answer55'];
$answer56 = $_POST['answer56'];
$answer57 = $_POST['answer57'];
$answer58 = $_POST['answer58'];
$answer59 = $_POST['answer59'];
$answer60 = $_POST['answer60'];
$answer61 = $_POST['answer61'];
$answer62 = $_POST['answer62'];
$answer63 = $_POST['answer63'];
$answer64 = $_POST['answer64'];
$answer65 = $_POST['answer65'];
$answer66 = $_POST['answer66'];
$answer67 = $_POST['answer67'];
$answer68 = $_POST['answer68'];
$answer69 = $_POST['answer69'];
$answer70 = $_POST['answer70'];
$answer71 = $_POST['answer71'];
$answer72 = $_POST['answer72'];
$answer73 = $_POST['answer73'];
$answer74 = $_POST['answer74'];
$answer75 = $_POST['answer75'];
$answer76 = $_POST['answer76'];
$answer77 = $_POST['answer77'];
$answer78 = $_POST['answer78'];
$answer79 = $_POST['answer79'];
$answer80 = $_POST['answer80'];
$answer81 = $_POST['answer81'];
$answer82 = $_POST['answer82'];
$answer83 = $_POST['answer83'];
$answer84 = $_POST['answer84'];
$answer85 = $_POST['answer85'];
$answer86 = $_POST['answer86'];
$answer87 = $_POST['answer87'];
$answer88 = $_POST['answer88'];
$answer89 = $_POST['answer89'];
$answer90 = $_POST['answer90'];
$answer91 = $_POST['answer91'];
$answer92 = $_POST['answer92'];
$answer93 = $_POST['answer93'];
$answer94 = $_POST['answer94'];
$answer95 = $_POST['answer95'];
$answer96 = $_POST['answer96'];
$answer97 = $_POST['answer97'];
$answer98 = $_POST['answer98'];
$answer99 = $_POST['answer99'];
$answer100 = $_POST['answer100'];
$answer101 = $_POST['answer101'];
$answer102 = $_POST['answer102'];
$answer103 = $_POST['answer103'];
$answer104 = $_POST['answer104'];
$answer105 = $_POST['answer105'];
$answer106 = $_POST['answer106'];
$answer107 = $_POST['answer107'];
$answer108 = $_POST['answer108'];
$answer109 = $_POST['answer109'];
$answer110 = $_POST['answer110'];
$answer111 = $_POST['answer111'];
$answer112 = $_POST['answer112'];
$answer113 = $_POST['answer113'];
$answer114 = $_POST['answer114'];
$answer115 = $_POST['answer115'];
$answer116 = $_POST['answer116'];
$answer117 = $_POST['answer117'];
$answer118 = $_POST['answer118'];
$answer119 = $_POST['answer119'];
$answer120 = $_POST['answer120'];
$answer121 = $_POST['answer121'];
$answer122 = $_POST['answer122'];
$answer123 = $_POST['answer123'];
$answer124 = $_POST['answer124'];
$answer125 = $_POST['answer125'];
$answer126 = $_POST['answer126'];
$answer127 = $_POST['answer127'];
$answer128 = $_POST['answer128'];
$answer129 = $_POST['answer129'];
$answer130 = $_POST['answer130'];
$answer131 = $_POST['answer131'];
$answer132 = $_POST['answer132'];
$answer133 = $_POST['answer133'];
$answer134 = $_POST['answer134'];
$answer135 = $_POST['answer135'];
$answer136 = $_POST['answer136'];
$answer137 = $_POST['answer137'];
$answer138 = $_POST['answer138'];
$answer139 = $_POST['answer139'];
$answer140 = $_POST['answer140'];
$answer141 = $_POST['answer141'];
$answer142 = $_POST['answer142'];
$answer143 = $_POST['answer143'];
$answer144 = $_POST['answer144'];
$answer145 = $_POST['answer145'];
$answer146 = $_POST['answer146'];
$answer147 = $_POST['answer147'];
$answer148 = $_POST['answer148'];
$answer149 = $_POST['answer149'];
$answer150 = $_POST['answer150'];
$answer151 = $_POST['answer151'];
$answer152 = $_POST['answer152'];
$answer153 = $_POST['answer153'];
$answer154 = $_POST['answer154'];
$answer155 = $_POST['answer155'];
$answer156 = $_POST['answer156'];
$answer157 = $_POST['answer157'];
$answer158 = $_POST['answer158'];
$answer159 = $_POST['answer159'];
$answer160 = $_POST['answer160'];
$answer161 = $_POST['answer161'];
$answer162 = $_POST['answer162'];
$answer163 = $_POST['answer163'];
$answer164 = $_POST['answer164'];
$answer165 = $_POST['answer165'];
$answer166 = $_POST['answer166'];
$answer167 = $_POST['answer167'];
$answer168 = $_POST['answer168'];
$answer169 = $_POST['answer169'];
$answer170 = $_POST['answer170'];
$answer171 = $_POST['answer171'];
$answer172 = $_POST['answer172'];
$answer173 = $_POST['answer173'];
$answer174 = $_POST['answer174'];
$answer175 = $_POST['answer175'];
$answer176 = $_POST['answer176'];
$answer177 = $_POST['answer177'];
$answer178 = $_POST['answer178'];
$answer179 = $_POST['answer179'];
$answer180 = $_POST['answer180'];
$answer181 = $_POST['answer181'];
$answer182 = $_POST['answer182'];
$answer183 = $_POST['answer183'];
$answer184 = $_POST['answer184'];
$answer185 = $_POST['answer185'];
$answer186 = $_POST['answer186'];
$answer187 = $_POST['answer187'];
$answer188 = $_POST['answer188'];
$answer189 = $_POST['answer189'];
$answer190 = $_POST['answer190'];
$answer191 = $_POST['answer191'];
$answer192 = $_POST['answer192'];
$answer193 = $_POST['answer193'];
$answer194 = $_POST['answer194'];
$answer195 = $_POST['answer195'];
$answer196 = $_POST['answer196'];
$answer197 = $_POST['answer197'];
$answer198 = $_POST['answer198'];
$answer199 = $_POST['answer199'];
$answer200 = $_POST['answer200'];
$answer201 = $_POST['answer201'];
$answer202 = $_POST['answer202'];
$answer203 = $_POST['answer203'];
$answer204 = $_POST['answer204'];
$answer205 = $_POST['answer205'];
$answer206 = $_POST['answer206'];
$answer207 = $_POST['answer207'];
$answer208 = $_POST['answer208'];
$answer209 = $_POST['answer209'];
$answer210 = $_POST['answer210'];
$answer211 = $_POST['answer211'];
$answer212 = $_POST['answer212'];
$answer213 = $_POST['answer213'];
$answer214 = $_POST['answer214'];
$answer215 = $_POST['answer215'];
$answer216 = $_POST['answer216'];
$answer217 = $_POST['answer217'];
$answer218 = $_POST['answer218'];
$answer219 = $_POST['answer219'];
$answer220 = $_POST['answer220'];
$answer221 = $_POST['answer221'];
$answer222 = $_POST['answer222'];
$answer223 = $_POST['answer223'];
$answer224 = $_POST['answer224'];
$answer225 = $_POST['answer225'];
$answer226 = $_POST['answer226'];
$answer227 = $_POST['answer227'];
$answer228 = $_POST['answer228'];
$answer229 = $_POST['answer229'];
$answer230 = $_POST['answer230'];
$answer231 = $_POST['answer231'];
$answer232 = $_POST['answer232'];
$answer233 = $_POST['answer233'];
$answer234 = $_POST['answer234'];
$answer235 = $_POST['answer235'];
$answer236 = $_POST['answer236'];
$answer237 = $_POST['answer237'];
$answer238 = $_POST['answer238'];
$answer239 = $_POST['answer239'];
$answer240 = $_POST['answer240'];
$answer241 = $_POST['answer241'];
$answer242 = $_POST['answer242'];
$answer243 = $_POST['answer243'];
$answer244 = $_POST['answer244'];
$answer245 = $_POST['answer245'];
$answer246 = $_POST['answer246'];
$answer247 = $_POST['answer247'];
$answer248 = $_POST['answer248'];
$answer249 = $_POST['answer249'];
$answer250 = $_POST['answer250'];
$answer251 = $_POST['answer251'];
$answer252 = $_POST['answer252'];
$answer253 = $_POST['answer253'];
$answer254 = $_POST['answer254'];
$answer255 = $_POST['answer255'];
$answer256 = $_POST['answer256'];
$answer257 = $_POST['answer257'];
$answer258 = $_POST['answer258'];
$answer259 = $_POST['answer259'];
$answer260 = $_POST['answer260'];
$answer261 = $_POST['answer261'];
$answer262 = $_POST['answer262'];
$answer263 = $_POST['answer263'];
$answer264 = $_POST['answer264'];
$answer265 = $_POST['answer265'];
$answer266 = $_POST['answer266'];
$answer267 = $_POST['answer267'];
$answer268 = $_POST['answer268'];
$answer269 = $_POST['answer269'];
$answer270 = $_POST['answer270'];
$answer271 = $_POST['answer271'];
$answer272 = $_POST['answer272'];
$answer273 = $_POST['answer273'];
$answer274 = $_POST['answer274'];
$answer275 = $_POST['answer275'];
$answer276 = $_POST['answer276'];
$answer277 = $_POST['answer277'];
$answer278 = $_POST['answer278'];
$answer279 = $_POST['answer279'];
$answer280 = $_POST['answer280'];
$answer281 = $_POST['answer281'];
$answer282 = $_POST['answer282'];
$answer283 = $_POST['answer283'];
$answer284 = $_POST['answer284'];
$answer285 = $_POST['answer285'];
$answer286 = $_POST['answer286'];
$answer287 = $_POST['answer287'];
$answer288 = $_POST['answer288'];
$answer289 = $_POST['answer289'];
$answer290 = $_POST['answer290'];
$answer291 = $_POST['answer291'];
$answer292 = $_POST['answer292'];
$answer293 = $_POST['answer293'];
$answer294 = $_POST['answer294'];
$answer295 = $_POST['answer295'];
$answer296 = $_POST['answer296'];
$answer297 = $_POST['answer297'];
$answer298 = $_POST['answer298'];
$answer299 = $_POST['answer299'];
$answer300 = $_POST['answer300'];
$answer301 = $_POST['answer301'];
$answer302 = $_POST['answer302'];
$answer303 = $_POST['answer303'];
$answer304 = $_POST['answer304'];
$answer305 = $_POST['answer305'];
$answer306 = $_POST['answer306'];
$answer307 = $_POST['answer307'];
$answer308 = $_POST['answer308'];
$answer309 = $_POST['answer309'];
$answer310 = $_POST['answer310'];
$answer311 = $_POST['answer311'];
$answer312 = $_POST['answer312'];
$answer313 = $_POST['answer313'];
$answer314 = $_POST['answer314'];
$answer315 = $_POST['answer315'];
$answer316 = $_POST['answer316'];
$answer317 = $_POST['answer317'];
$answer318 = $_POST['answer318'];
$answer319 = $_POST['answer319'];
$answer320 = $_POST['answer320'];
$answer321 = $_POST['answer321'];
$answer322 = $_POST['answer322'];
$answer323 = $_POST['answer323'];
$answer324 = $_POST['answer324'];
$answer325 = $_POST['answer325'];
$answer326 = $_POST['answer326'];
$answer327 = $_POST['answer327'];
$answer328 = $_POST['answer328'];
$answer329 = $_POST['answer329'];
$answer330 = $_POST['answer330'];
$answer331 = $_POST['answer331'];
$answer332 = $_POST['answer332'];
$answer333 = $_POST['answer333'];
$answer334 = $_POST['answer334'];
$answer335 = $_POST['answer335'];
$answer336 = $_POST['answer336'];
$answer337 = $_POST['answer337'];
$answer338 = $_POST['answer338'];
$answer339 = $_POST['answer339'];
$answer340 = $_POST['answer340'];
$answer341 = $_POST['answer341'];
$answer342 = $_POST['answer342'];
$answer343 = $_POST['answer343'];
$answer344 = $_POST['answer344'];
$answer345 = $_POST['answer345'];
$answer346 = $_POST['answer346'];
$answer347 = $_POST['answer347'];
$answer348 = $_POST['answer348'];
$answer349 = $_POST['answer349'];
$answer350 = $_POST['answer350'];
$answer351 = $_POST['answer351'];
$answer352 = $_POST['answer352'];
$answer353 = $_POST['answer353'];
$answer354 = $_POST['answer354'];
$answer355 = $_POST['answer355'];
$answer356 = $_POST['answer356'];
$answer357 = $_POST['answer357'];
$answer358 = $_POST['answer358'];
$answer359 = $_POST['answer359'];
$answer360 = $_POST['answer360'];
$answer361 = $_POST['answer361'];
$answer362 = $_POST['answer362'];
$answer363 = $_POST['answer363'];
$answer364 = $_POST['answer364'];
$answer365 = $_POST['answer365'];
$answer366 = $_POST['answer366'];
$answer367 = $_POST['answer367'];
$answer368 = $_POST['answer368'];
$answer369 = $_POST['answer369'];
$answer370 = $_POST['answer370'];
$answer371 = $_POST['answer371'];
$answer372 = $_POST['answer372'];
$answer373 = $_POST['answer373'];
$answer374 = $_POST['answer374'];
$answer375 = $_POST['answer375'];
$answer376 = $_POST['answer376'];
$answer377 = $_POST['answer377'];
$answer378 = $_POST['answer378'];
$answer379 = $_POST['answer379'];
$answer380 = $_POST['answer380'];
$answer381 = $_POST['answer381'];
$answer382 = $_POST['answer382'];
$answer383 = $_POST['answer383'];
$answer384 = $_POST['answer384'];
$answer385 = $_POST['answer385'];
$answer386 = $_POST['answer386'];
$answer387 = $_POST['answer387'];
$answer388 = $_POST['answer388'];
$answer389 = $_POST['answer389'];
$answer390 = $_POST['answer390'];
$answer391 = $_POST['answer391'];
$answer392 = $_POST['answer392'];
$answer393 = $_POST['answer393'];
$answer394 = $_POST['answer394'];
$answer395 = $_POST['answer395'];
$answer396 = $_POST['answer396'];
$answer397 = $_POST['answer397'];
$answer398 = $_POST['answer398'];
$answer399 = $_POST['answer399'];
$answer400 = $_POST['answer400'];
$answer401 = $_POST['answer401'];
$answer402 = $_POST['answer402'];
$answer403 = $_POST['answer403'];
$answer404 = $_POST['answer404'];
$answer405 = $_POST['answer405'];
$answer406 = $_POST['answer406'];
$answer407 = $_POST['answer407'];
$answer408 = $_POST['answer408'];
$answer409 = $_POST['answer409'];
$answer410 = $_POST['answer410'];
$answer411 = $_POST['answer411'];
$answer412 = $_POST['answer412'];
$answer413 = $_POST['answer413'];
$answer414 = $_POST['answer414'];
$answer415 = $_POST['answer415'];
$answer416 = $_POST['answer416'];
$answer417 = $_POST['answer417'];
$answer418 = $_POST['answer418'];
$answer419 = $_POST['answer419'];
$answer420 = $_POST['answer420'];
$answer421 = $_POST['answer421'];
$answer422 = $_POST['answer422'];
$answer423 = $_POST['answer423'];
$answer424 = $_POST['answer424'];
$answer425 = $_POST['answer425'];
$answer426 = $_POST['answer426'];
$answer427 = $_POST['answer427'];
$answer428 = $_POST['answer428'];
$answer429 = $_POST['answer429'];
$answer430 = $_POST['answer430'];
$answer431 = $_POST['answer431'];
$answer432 = $_POST['answer432'];
$answer433 = $_POST['answer433'];
$answer434 = $_POST['answer434'];
$answer435 = $_POST['answer435'];
$answer436 = $_POST['answer436'];
$answer437 = $_POST['answer437'];
$answer438 = $_POST['answer438'];
$answer439 = $_POST['answer439'];
$answer440 = $_POST['answer440'];
$answer441 = $_POST['answer441'];
$answer442 = $_POST['answer442'];
$answer443 = $_POST['answer443'];
$answer444 = $_POST['answer444'];
$answer445 = $_POST['answer445'];
$answer446 = $_POST['answer446'];
$answer447 = $_POST['answer447'];
$answer448 = $_POST['answer448'];
$answer449 = $_POST['answer449'];
$answer450 = $_POST['answer450'];
$answer451 = $_POST['answer451'];
$answer452 = $_POST['answer452'];
$answer453 = $_POST['answer453'];
$answer454 = $_POST['answer454'];
$answer455 = $_POST['answer455'];
$answer456 = $_POST['answer456'];
$answer457 = $_POST['answer457'];
$answer458 = $_POST['answer458'];
$answer459 = $_POST['answer459'];
$answer460 = $_POST['answer460'];
$answer461 = $_POST['answer461'];
$answer462 = $_POST['answer462'];
$answer463 = $_POST['answer463'];
$answer464 = $_POST['answer464'];
$answer465 = $_POST['answer465'];
$answer466 = $_POST['answer466'];
$answer467 = $_POST['answer467'];
$answer468 = $_POST['answer468'];
$answer469 = $_POST['answer469'];
$answer470 = $_POST['answer470'];
$answer471 = $_POST['answer471'];
$answer472 = $_POST['answer472'];
$answer473 = $_POST['answer473'];
$answer474 = $_POST['answer474'];
$answer475 = $_POST['answer475'];
$answer476 = $_POST['answer476'];
$answer477 = $_POST['answer477'];
$answer478 = $_POST['answer478'];
$answer479 = $_POST['answer479'];
$answer480 = $_POST['answer480'];
$answer481 = $_POST['answer481'];
$answer482 = $_POST['answer482'];
$answer483 = $_POST['answer483'];
$answer484 = $_POST['answer484'];
$answer485 = $_POST['answer485'];
$answer486 = $_POST['answer486'];
$answer487 = $_POST['answer487'];
$answer488 = $_POST['answer488'];
$answer489 = $_POST['answer489'];
$answer490 = $_POST['answer490'];
$answer491 = $_POST['answer491'];
$answer492 = $_POST['answer492'];
$answer493 = $_POST['answer493'];
$answer494 = $_POST['answer494'];
$answer495 = $_POST['answer495'];
$answer496 = $_POST['answer496'];
$answer497 = $_POST['answer497'];
$answer498 = $_POST['answer498'];
$answer499 = $_POST['answer499'];
$answer500 = $_POST['answer500'];
$answer501 = $_POST['answer501'];
$answer502 = $_POST['answer502'];
$answer503 = $_POST['answer503'];
$answer504 = $_POST['answer504'];
$answer505 = $_POST['answer505'];
$answer506 = $_POST['answer506'];
$answer507 = $_POST['answer507'];
$answer508 = $_POST['answer508'];
$answer509 = $_POST['answer509'];
$answer510 = $_POST['answer510'];
$answer511 = $_POST['answer511'];
$answer512 = $_POST['answer512'];
$answer513 = $_POST['answer513'];
$answer514 = $_POST['answer514'];
$answer515 = $_POST['answer515'];
$answer516 = $_POST['answer516'];
$answer517 = $_POST['answer517'];
$answer518 = $_POST['answer518'];
$answer519 = $_POST['answer519'];
$answer520 = $_POST['answer520'];
$answer521 = $_POST['answer521'];
$answer522 = $_POST['answer522'];
$answer523 = $_POST['answer523'];
$answer524 = $_POST['answer524'];
$answer525 = $_POST['answer525'];
$answer526 = $_POST['answer526'];
$answer527 = $_POST['answer527'];
$answer528 = $_POST['answer528'];
$answer529 = $_POST['answer529'];
$answer530 = $_POST['answer530'];
$answer531 = $_POST['answer531'];
$answer532 = $_POST['answer532'];
$answer533 = $_POST['answer533'];
$answer534 = $_POST['answer534'];
$answer535 = $_POST['answer535'];
$answer536 = $_POST['answer536'];
$answer537 = $_POST['answer537'];
$answer538 = $_POST['answer538'];
$answer539 = $_POST['answer539'];
$answer540 = $_POST['answer540'];
$answer541 = $_POST['answer541'];
$answer542 = $_POST['answer542'];
$answer543 = $_POST['answer543'];
$answer544 = $_POST['answer544'];
$answer545 = $_POST['answer545'];
$answer546 = $_POST['answer546'];
$answer547 = $_POST['answer547'];
$answer548 = $_POST['answer548'];
$answer549 = $_POST['answer549'];
$answer550 = $_POST['answer550'];
$answer551 = $_POST['answer551'];
$answer552 = $_POST['answer552'];
$answer553 = $_POST['answer553'];
$answer554 = $_POST['answer554'];
$answer555 = $_POST['answer555'];
$answer556 = $_POST['answer556'];
$answer557 = $_POST['answer557'];
$answer558 = $_POST['answer558'];
$answer559 = $_POST['answer559'];
$answer560 = $_POST['answer560'];
$answer561 = $_POST['answer561'];
$answer562 = $_POST['answer562'];
$answer563 = $_POST['answer563'];
$answer564 = $_POST['answer564'];
$answer565 = $_POST['answer565'];
$answer566 = $_POST['answer566'];

$scoreEmpty=0;
$arrEmpty=[$answer1,$answer2,$answer3,$answer4,$answer5,$answer6,$answer7,$answer8,$answer9,$answer10,$answer11,$answer12,$answer13,$answer14,$answer15,$answer16,$answer17,$answer18,$answer19,$answer20,$answer21,$answer22,$answer23,$answer24,$answer25,$answer26,$answer27,$answer28,$answer29,
$answer30,$answer31,$answer32,$answer33,$answer34,$answer35,$answer36,$answer37,$answer38,$answer39,$answer40,$answer41,$answer42,$answer43,$answer44,$answer45,$answer46,$answer47,$answer48,$answer49,
$answer50,$answer51,$answer52,$answer53,$answer54,$answer55,$answer56,$answer57,$answer58,$answer59, $answer60,$answer61,$answer62,$answer63,$answer64,$answer65,$answer66,$answer67,$answer68,$answer69,
$answer70,$answer71,$answer72,$answer73,$answer74,$answer75,$answer76,$answer77,$answer78,$answer79,$answer80,$answer81,$answer82,$answer83,$answer84,$answer85,$answer86,$answer87,$answer88,$answer89,
$answer90,$answer91,$answer92,$answer93,$answer94,$answer95,$answer96,$answer97,$answer98,$answer99,$answer100,$answer101,$answer102,$answer103,$answer104,$answer105,$answer106,$answer107,$answer108,$answer109,
$answer110,$answer111,$answer112,$answer113,$answer114,$answer115,$answer116,$answer117,$answer118,$answer119,$answer120,$answer121,$answer122,$answer123,$answer124,$answer125,$answer126,$answer127,$answer128,$answer129,
$answer130,$answer131,$answer132,$answer133,$answer134,$answer135,$answer136,$answer137,$answer138,$answer139, $answer140,$answer141,$answer142,$answer143,$answer144,$answer145,$answer146,$answer147,$answer148,$answer149,
$answer150,$answer151,$answer152,$answer153,$answer154,$answer155,$answer156,$answer157,$answer158,$answer159, $answer160,$answer161,$answer162,$answer163,$answer164,$answer165,$answer166,$answer167,$answer168,$answer169,
$answer170,$answer171,$answer172,$answer173,$answer174,$answer175,$answer176,$answer177,$answer178,$answer179, $answer180,$answer181,$answer182,$answer183,$answer184,$answer185,$answer186,$answer187,$answer188,$answer189,
$answer190,$answer191,$answer192,$answer193,$answer194,$answer195,$answer196,$answer197,$answer198,$answer199, $answer200,$answer201,$answer202,$answer203,$answer204,$answer205,$answer206,$answer207,$answer208,$answer209,
$answer210,$answer211,$answer212,$answer213,$answer214,$answer215,$answer216,$answer217,$answer218,$answer219, $answer220,$answer221,$answer222,$answer223,$answer224,$answer225,$answer226,$answer227,$answer228,$answer229,
$answer230,$answer231,$answer232,$answer233,$answer234,$answer235,$answer236,$answer237,$answer238,$answer239, $answer240,$answer241,$answer242,$answer243,$answer244,$answer245,$answer246,$answer247,$answer248,$answer249,
$answer250,$answer251,$answer252,$answer253,$answer254,$answer255,$answer256,$answer257,$answer258,$answer259, $answer260,$answer261,$answer262,$answer263,$answer264,$answer265,$answer266,$answer267,$answer268,$answer269,
$answer270,$answer271,$answer272,$answer273,$answer274,$answer275,$answer276,$answer277,$answer278,$answer279, $answer280,$answer281,$answer282,$answer283,$answer284,$answer285,$answer286,$answer287,$answer288,$answer289,
$answer290,$answer291,$answer292,$answer293,$answer294,$answer295,$answer296,$answer297,$answer298,$answer299, $answer300,$answer301,$answer302,$answer303,$answer304,$answer305,$answer306,$answer307,$answer308,$answer309,
$answer310,$answer311,$answer312,$answer313,$answer314,$answer315,$answer316,$answer317,$answer318,$answer319, $answer320,$answer321,$answer322,$answer323,$answer324,$answer325,$answer326,$answer327,$answer328,$answer329,
$answer330,$answer331,$answer332,$answer333,$answer334,$answer335,$answer336,$answer337,$answer338,$answer339, $answer340,$answer341,$answer342,$answer343,$answer344,$answer345,$answer346,$answer347,$answer348,$answer349,
$answer350,$answer351,$answer352,$answer353,$answer354,$answer355,$answer356,$answer357,$answer358,$answer359, $answer360,$answer361,$answer362,$answer363,$answer364,$answer365,$answer366,$answer367,$answer368,$answer369,
$answer370,$answer371,$answer372,$answer373,$answer374,$answer375,$answer376,$answer377,$answer378,$answer379, $answer380,$answer381,$answer382,$answer383,$answer384,$answer385,$answer386,$answer387,$answer388,$answer389,
$answer390,$answer391,$answer392,$answer393,$answer394,$answer395,$answer396,$answer397,$answer398,$answer399, $answer400,$answer401,$answer402,$answer403,$answer404,$answer405,$answer406,$answer407,$answer408,$answer409,
$answer410,$answer411,$answer412,$answer413,$answer414,$answer415,$answer416,$answer417,$answer418,$answer419, $answer420,$answer421,$answer422,$answer423,$answer424,$answer425,$answer426,$answer427,$answer428,$answer429,
$answer430,$answer431,$answer432,$answer433,$answer434,$answer435,$answer436,$answer437,$answer438,$answer439, $answer440,$answer441,$answer442,$answer443,$answer444,$answer445,$answer446,$answer447,$answer448,$answer449,
$answer450,$answer451,$answer452,$answer453,$answer454,$answer455,$answer456,$answer457,$answer458,$answer459, $answer460,$answer461,$answer462,$answer463,$answer464,$answer465,$answer466,$answer467,$answer468,$answer469,
$answer470,$answer471,$answer472,$answer473,$answer474,$answer475,$answer476,$answer477,$answer478,$answer479, $answer480,$answer481,$answer482,$answer483,$answer484,$answer485,$answer486,$answer487,$answer488,$answer489,
$answer490,$answer491,$answer492,$answer493,$answer494,$answer495,$answer496,$answer497,$answer498,$answer499, $answer500,$answer501,$answer502,$answer503,$answer504,$answer505,$answer506,$answer507,$answer508,$answer509,
$answer510,$answer511,$answer512,$answer513,$answer514,$answer515,$answer516,$answer517,$answer518,$answer519,$answer520,$answer521,$answer522,$answer523,$answer524,$answer525,$answer526,$answer527,$answer528,$answer529,
$answer530,$answer531,$answer532,$answer533,$answer534,$answer535,$answer536,$answer537,$answer538,$answer539,$answer540,$answer541,$answer542,$answer543,$answer544,$answer545,$answer546,$answer547,$answer548,$answer549,
$answer550,$answer551,$answer552,$answer553,$answer554,$answer555,$answer556,$answer557,$answer558,$answer559,$answer560,$answer561,$answer562,$answer563,$answer564,$answer565,$answer566];

for($x=0;$x < count($arrEmpty); $x++){
    if($arrEmpty[$x]=='E'){
        $scoreEmpty +=1;       
    }  
}
echo $scoreEmpty;
echo "<br>";

$scoreL=0;
$arrL_false=[$answer15,$answer30,$answer45, $answer60,$answer75,$answer90,$answer105, $answer120,$answer135,$answer150,$answer165, $answer195,$answer225,$answer255,$answer285];

/*------------------------------------------------------
for($x=0;$x < count($arrL_false); $x++){
    $arrL_false[$x]='F';      
    
}*/
//------------------------------------------------------

for($x=0;$x < count($arrL_false); $x++){
    if($arrL_false[$x]=='F'){
        $scoreL +=1;       
    }  
}
echo $scoreL;
echo "<br>";

$scoreF=0;
$arrF_true=[$answer14, $answer23,$answer27,$answer31, $answer34,$answer35, $answer40, $answer42,$answer48,$answer49, $answer50,$answer53, $answer56, $answer66,$answer85,$answer121,$answer123,$answer139, $answer146, $answer151,$answer156,$answer168, $answer184,$answer197, $answer200, $answer202,$answer205,$answer206, $answer209,$answer210, $answer211, $answer215,$answer218,$answer227, $answer245,$answer246, $answer247, $answer252,$answer256,$answer269, $answer275,$answer286, $answer291, $answer293];
$arrF_false=[$answer17, $answer20,$answer54,$answer65, $answer75, $answer83, $answer112,$answer113,$answer115, $answer164, $answer169, $answer177,$answer185,$answer196, $answer199, $answer220, $answer257,$answer258,$answer272, $answer276];

/*------------------------------------------------------
for($x=0;$x < count($arrF_true); $x++){
    $arrF_true[$x]='T';
}
for($x=0;$x < count($arrF_false); $x++){
    $arrF_false[$x]='F' ;      
     
}*/

//------------------------------------------------------

for($x=0;$x < count($arrF_true); $x++){
    if($arrF_true[$x]=='T'){
        $scoreF +=1;       
    }  
}
for($x=0;$x < count($arrF_false); $x++){
    if($arrF_false[$x]=='F'){
        $scoreF +=1;       
    }  
}
echo $scoreF;
echo "<br>";

$scoreK=0;
$arrK_false=[$answer30, $answer39,$answer71,$answer89, $answer124, $answer129, $answer134,$answer138,$answer142, $answer148, $answer160, $answer170,$answer171,$answer180, $answer183, $answer217, $answer234,$answer267,$answer272, $answer296, $answer316, $answer322,$answer374,$answer383, $answer397, $answer398, $answer406,$answer461,$answer502];

/*------------------------------------------------------
for($x=0;$x < count($arrK_false); $x++){
    $arrK_false[$x]='F';
}*/
//------------------------------------------------------


if($answer96=='T'){
    $scoreK +=1;       
}
for($x=0;$x < count($arrK_false); $x++){
    if($arrK_false[$x]=='F'){
        $scoreK +=1;       
    }  
}

echo $scoreK;
echo "<br>";

$scoreHS=0;
$arrHS_true=[$answer23, $answer29,$answer43,$answer62, $answer72, $answer108, $answer114,$answer125,$answer161, $answer189, $answer273];
$arrHS_false=[$answer2, $answer3,$answer7,$answer9, $answer18, $answer51, $answer55, $answer63,$answer68,$answer103, $answer130, $answer153, $answer155, $answer163,$answer175,$answer188, $answer190, $answer192, $answer230, $answer243,$answer274,$answer281];

/*------------------------------------------------------

for($x=0;$x < count($arrHS_true); $x++){
    $arrHS_true[$x]='T';
}
for($x=0;$x < count($arrHS_false); $x++){
    $arrHS_false[$x]='F';      
}*/


//------------------------------------------------------

for($x=0;$x < count($arrHS_true); $x++){
    if($arrHS_true[$x]=='T'){
        $scoreHS +=1;       
    }  
}

for($x=0;$x < count($arrHS_false); $x++){
    if($arrHS_false[$x]=='F'){
        $scoreHS +=1;       
    }  
}
echo $scoreHS;
echo "<br>";

$scoreD=0;
$arrD_true=[$answer5, $answer13,$answer23,$answer32, $answer41, $answer43, $answer52, $answer67,$answer86,$answer104, $answer130, $answer138, $answer142, $answer158, $answer159,$answer182,$answer189, $answer193, $answer236, $answer259];
$arrD_false=[$answer2, $answer8,$answer9,$answer18, $answer30, $answer36, $answer39, $answer46, $answer51,$answer57,$answer58, $answer64, $answer80, $answer88, $answer89, $answer95,$answer98,$answer107, $answer122, $answer131, $answer145, $answer152, $answer153,$answer154,$answer155, $answer160, $answer178, $answer191, $answer207, $answer208,$answer233,$answer241, $answer242, $answer248, $answer263, $answer270, $answer271,$answer272,$answer285, $answer296];

/*------------------------------------------------------

for($x=0;$x < count($arrD_false); $x++){
    $arrD_false[$x]='F';
}
for($x=0;$x < count($arrD_true); $x++){
    $arrD_true[$x]='T';
        

}*/


//------------------------------------------------------


for($x=0;$x < count($arrD_true); $x++){
    if($arrD_true[$x]=='T'){
        $scoreD +=1;       
    }  
}

for($x=0;$x < count($arrD_false); $x++){
    if($arrD_false[$x]=='F'){
        $scoreD +=1;       
    }  
}
echo $scoreD;
echo "<br>";

$scoreHY=0;
$arrHY_true=[$answer10, $answer23,$answer32,$answer43, $answer44, $answer47, $answer76, $answer114,$answer179,$answer186, $answer189, $answer238, $answer253];
$arrHY_false=[$answer2, $answer3,$answer6,$answer7, $answer8, $answer9, $answer12, $answer26,$answer30,$answer51, $answer55, $answer71, $answer89, $answer93,$answer103,$answer107, $answer109, $answer124, $answer128, $answer129,$answer136,$answer137, $answer141, $answer147,$answer153, $answer160,$answer162,$answer163, $answer170, $answer172, $answer174, $answer175,$answer180,$answer188, $answer190, $answer192, $answer201, $answer213, $answer230,$answer234,$answer243, $answer265, $answer267, $answer274, $answer279, $answer289,$answer292];

for($x=0;$x < count($arrHY_true); $x++){
    if($arrHY_true[$x]=='T'){
        $scoreHY +=1;       
    }  
}

for($x=0;$x < count($arrHY_false); $x++){
    if($arrHY_false[$x]=='F'){
        $scoreHY +=1;       
    }  
}
echo $scoreHY;
echo "<br>";



$scorePD=0;
$arrPD_true=[$answer16, $answer21,$answer24,$answer32, $answer33, $answer35,$answer38, $answer42,$answer61,$answer67, $answer84, $answer94,$answer102, $answer106,$answer110,$answer118, $answer127, $answer215, $answer216, $answer224,$answer239,$answer244, $answer245, $answer284];
$arrPD_false=[$answer8, $answer20,$answer37,$answer82, $answer91, $answer96, $answer107, $answer134, $answer137,$answer141,$answer155, $answer170, $answer171, $answer173, $answer180, $answer183,$answer201,$answer231, $answer235, $answer237, $answer248, $answer267, $answer287,$answer289,$answer294, $answer296];

for($x=0;$x < count($arrPD_true); $x++){
    if($arrPD_true[$x]=='T'){
        $scorePD +=1;       
    }  
}

for($x=0;$x < count($arrPD_false); $x++){
    if($arrPD_false[$x]=='F'){
        $scorePD +=1;       
    }  
}
echo $scorePD;
echo "<br>";

$scoreMF_female=0;
$scoreMF_male=0;
$arrMF_true_female=[$answer4, $answer25,$answer70,$answer74, $answer77, $answer78,$answer87, $answer92, $answer126, $answer132,$answer134,$answer140, $answer149, $answer187, $answer203, $answer204, $answer217,$answer226,$answer239, $answer261, $answer278,$answer282, $answer295,$answer299, $answer133];
$arrMF_false_female=[$answer1, $answer19,$answer26,$answer28, $answer79, $answer80, $answer81, $answer89,$answer99, $answer112,$answer115,$answer116, $answer117, $answer120, $answer144, $answer176, $answer198, $answer213,$answer214,$answer219, $answer221, $answer223, $answer229, $answer249, $answer254, $answer260,$answer262,$answer264, $answer280, $answer283, $answer300, $answer69, $answer179, $answer231, $answer297];
$arrMF_true_male=[$answer4, $answer25,$answer70,$answer74, $answer77, $answer78,$answer87, $answer92, $answer126, $answer132,$answer134,$answer140, $answer149, $answer187, $answer203, $answer204, $answer217,$answer226,$answer239, $answer261, $answer278,$answer282, $answer295,$answer299, $answer69, $answer179, $answer231, $answer297];
$arrMF_false_male=[$answer1, $answer19,$answer26,$answer28, $answer79, $answer80, $answer81, $answer89,$answer99, $answer112,$answer115,$answer116, $answer117, $answer120, $answer144, $answer176, $answer198, $answer213,$answer214,$answer219, $answer221, $answer223, $answer229, $answer249, $answer254, $answer260,$answer262,$answer264, $answer280, $answer283, $answer300, $answer133];
if($gender=="Female"){
    for($x=0;$x < count($arrMF_true_female); $x++){
        if($arrMF_true_female[$x]=='T'){
            $scoreMF_female +=1;       
        }  
    }
    
    for($x=0;$x < count($arrMF_false_female); $x++){
        if($arrMF_false_female[$x]=='F'){
            $scoreMF_female +=1;       
        }  
    }
    echo $scoreMF_female;
    

}
if($gender=="Male"){
    for($x=0;$x < count($arrMF_true_male); $x++){
        if($arrMF_true_male[$x]=='T'){
            $scoreMF_male +=1;       
        }  
    }
    
    for($x=0;$x < count($arrMF_false_male); $x++){
        if($arrMF_false_male[$x]=='F'){
            $scoreMF_male +=1;       
        }  
    }
    echo $scoreMF_male;
}

$scorePA=0;
$arrPA_true=[$answer15, $answer16,$answer22,$answer24, $answer27, $answer35,$answer110, $answer121,$answer123, $answer127, $answer151,$answer157,$answer158, $answer202, $answer275,$answer284, $answer291,$answer293, $answer299, $answer305,$answer317,$answer338, $answer341, $answer364,$answer365];
$arrPA_false=[$answer93, $answer107,$answer109,$answer111, $answer117, $answer124, $answer268, $answer281, $answer93, $answer107,$answer109,$answer111, $answer117, $answer124, $answer268, $answer281, $answer294, $answer313,$answer316,$answer319, $answer327, $answer347, $answer348];

for($x=0;$x < count($arrPA_true); $x++){
    if($arrPA_true[$x]=='T'){
        $scorePA +=1;       
    }  
}

for($x=0;$x < count($arrPA_false); $x++){
    if($arrPA_false[$x]=='F'){
        $scorePA +=1;       
    }  
}
echo $scorePA;
echo "<br>";

$scorePT=0;
$arrPT_true=[$answer10, $answer15,$answer22,$answer32, $answer41, $answer67,$answer76, $answer86,$answer94, $answer102, $answer106,$answer142,$answer159, $answer182, $answer189,$answer217, $answer238,$answer266, $answer301, $answer304,$answer305,$answer317, $answer321, $answer336,$answer337, $answer340,$answer342, $answer343, $answer344,$answer346,$answer349, $answer351, $answer352,$answer356, $answer357,$answer358, $answer359, $answer360,$answer361];
$arrPT_false=[$answer3, $answer8,$answer36,$answer122, $answer152, $answer164, $answer178, $answer329, $answer353];

for($x=0;$x < count($arrPT_true); $x++){
    if($arrPT_true[$x]=='T'){
        $scorePT +=1;       
    }  
}

for($x=0;$x < count($arrPT_false); $x++){
    if($arrPT_false[$x]=='F'){
        $scorePT +=1;       
    }  
}
echo $scorePT;
echo "<br>";

$scoreSC=0;
$arrSC_true=[$answer15, $answer16,$answer21,$answer22, $answer24, $answer32,$answer33, $answer35,$answer38, $answer40, $answer41,$answer47,$answer52, $answer76, $answer97,$answer104, $answer121,$answer156, $answer157, $answer159,$answer168,$answer179, $answer182, $answer194,$answer202, $answer210,$answer212, $answer238, $answer241,$answer251,$answer259, $answer266, $answer273,$answer282, $answer291,$answer297, $answer301, $answer303,$answer305,$answer307, $answer312, $answer320,$answer324, $answer325,$answer332, $answer334, $answer335,$answer339,$answer341, $answer345, $answer349,$answer350, $answer352,$answer354, $answer355, $answer356,$answer360,$answer363, $answer364];
$arrSC_false=[$answer8, $answer17,$answer20,$answer37, $answer65, $answer103, $answer119, $answer177, $answer178, $answer187, $answer192,$answer196,$answer220, $answer276, $answer281, $answer306, $answer309, $answer322, $answer330];

for($x=0;$x < count($arrSC_true); $x++){
    if($arrSC_true[$x]=='T'){
        $scoreSC +=1;       
    }  
}

for($x=0;$x < count($arrSC_false); $x++){
    if($arrSC_false[$x]=='F'){
        $scoreSC +=1;       
    }  
}
echo $scoreSC;
echo "<br>";

$scoreMA=0;
$arrMA_true=[$answer11, $answer13,$answer21,$answer22, $answer59, $answer64,$answer73, $answer97,$answer100, $answer109, $answer127,$answer134,$answer143, $answer156, $answer157,$answer167, $answer181,$answer194, $answer212, $answer222,$answer226,$answer228, $answer232, $answer233,$answer238, $answer240,$answer250, $answer251, $answer263,$answer266,$answer268, $answer271, $answer277,$answer279, $answer298];
$arrMA_false=[$answer101, $answer105,$answer111,$answer119, $answer120, $answer148, $answer166, $answer171, $answer180, $answer267, $answer289];

for($x=0;$x < count($arrMA_true); $x++){
    if($arrMA_true[$x]=='T'){
        $scoreMA +=1;       
    }  
}

for($x=0;$x < count($arrMA_false); $x++){
    if($arrMA_false[$x]=='F'){
        $scoreMA +=1;       
    }  
}
echo $scoreMA;
echo "<br>";

$scoreSI=0;
$arrSI_true=[$answer32, $answer67,$answer82,$answer111, $answer117, $answer124,$answer138, $answer147,$answer171, $answer172, $answer180,$answer201,$answer236, $answer267, $answer278,$answer292, $answer304,$answer316, $answer321, $answer332,$answer336,$answer342, $answer357, $answer377,$answer383, $answer398, $answer411, $answer427,$answer436,$answer455, $answer473, $answer487,$answer549, $answer564];
$arrSI_false=[$answer25, $answer33,$answer57,$answer91, $answer99, $answer119, $answer126, $answer143, $answer193, $answer208,$answer229,$answer231, $answer254, $answer262, $answer281, $answer296, $answer309, $answer353,$answer359,$answer371, $answer391, $answer400, $answer415, $answer440, $answer446, $answer449,$answer450,$answer451, $answer462, $answer469, $answer479, $answer481, $answer482, $answer505,$answer521,$answer547];   

for($x=0;$x < count($arrSI_true); $x++){
    if($arrSI_true[$x]=='T'){
        $scoreSI +=1;       
    }  
}

for($x=0;$x < count($arrSI_false); $x++){
    if($arrSI_false[$x]=='F'){
        $scoreSI +=1;       
    }  
}
echo $scoreSI;
echo "<br>";

$scoreHS_corrected=$scoreHS;
$scorePD_corrected=$scorePD;
$scorePT_corrected=$scorePT;
$scoreSC_corrected=$scoreSC;
$scoreMA_corrected=$scoreMA;

if($scoreK==30 ){
    $scoreHS_corrected +=15;
    $scorePD_corrected +=12;
    $scorePT_corrected +=30;
    $scoreSC_corrected +=30;
    $scoreMA_corrected +=6;
}
if($scoreK==29){
    $scoreHS_corrected +=15;
    $scorePD_corrected +=12;
    $scorePT_corrected +=29;
    $scoreSC_corrected +=29;
    $scoreMA_corrected +=6;
}
if($scoreK==28){
    $scoreHS_corrected +=14;
    $scorePD_corrected +=11;
    $scorePT_corrected +=28;
    $scoreSC_corrected +=28;
    $scoreMA_corrected +=6;
}
if($scoreK==27){
    $scoreHS_corrected +=14;
    $scorePD_corrected +=11;
    $scorePT_corrected +=27;
    $scoreSC_corrected +=27;
    $scoreMA_corrected +=5;
}
if($scoreK==26){
    $scoreHS_corrected +=13;
    $scorePD_corrected +=10;
    $scorePT_corrected +=26;
    $scoreSC_corrected +=26;
    $scoreMA_corrected +=5;
}
if($scoreK==25){
    $scoreHS_corrected +=13;
    $scorePD_corrected +=10;
    $scorePT_corrected +=25;
    $scoreSC_corrected +=25;
    $scoreMA_corrected +=5;
}
if($scoreK==24){
    $scoreHS_corrected +=12;
    $scorePD_corrected +=10;
    $scorePT_corrected +=24;
    $scoreSC_corrected +=24;
    $scoreMA_corrected +=5;
}
if($scoreK==23){
    $scoreHS_corrected +=12;
    $scorePD_corrected +=9;
    $scorePT_corrected +=23;
    $scoreSC_corrected +=23;
    $scoreMA_corrected +=5;
}
if($scoreK==22){
    $scoreHS_corrected +=11;
    $scorePD_corrected +=9;
    $scorePT_corrected +=22;
    $scoreSC_corrected +=22;
    $scoreMA_corrected +=4;
}
if($scoreK==21){
    $scoreHS_corrected +=11;
    $scorePD_corrected +=8;
    $scorePT_corrected +=21;
    $scoreSC_corrected +=21;
    $scoreMA_corrected +=4;
}
if($scoreK==20){
    $scoreHS_corrected +=10;
    $scorePD_corrected +=8;
    $scorePT_corrected +=20;
    $scoreSC_corrected +=20;
    $scoreMA_corrected +=4;
}
if($scoreK==19){
    $scoreHS_corrected +=10;
    $scorePD_corrected +=8;
    $scorePT_corrected +=19;
    $scoreSC_corrected +=19;
    $scoreMA_corrected +=4;
}
if($scoreK==18){
    $scoreHS_corrected +=9;
    $scorePD_corrected +=7;
    $scorePT_corrected +=18;
    $scoreSC_corrected +=18;
    $scoreMA_corrected +=4;
}
if($scoreK==17){
    $scoreHS_corrected +=9;
    $scorePD_corrected +=7;
    $scorePT_corrected +=17;
    $scoreSC_corrected +=17;
    $scoreMA_corrected +=3;
}
if($scoreK==16){
    $scoreHS_corrected +=8;
    $scorePD_corrected +=6;
    $scorePT_corrected +=16;
    $scoreSC_corrected +=16;
    $scoreMA_corrected +=3;
}
if($scoreK==15){
    $scoreHS_corrected +=8;
    $scorePD_corrected +=6;
    $scorePT_corrected +=15;
    $scoreSC_corrected +=15;
    $scoreMA_corrected +=3;
}
if($scoreK==14){
    $scoreHS_corrected +=7;
    $scorePD_corrected +=6;
    $scorePT_corrected +=14;
    $scoreSC_corrected +=14;
    $scoreMA_corrected +=3;
}
if($scoreK==13){
    $scoreHS_corrected +=7;
    $scorePD_corrected +=5;
    $scorePT_corrected +=13;
    $scoreSC_corrected +=13;
    $scoreMA_corrected +=3;
}
if($scoreK==12){
    $scoreHS_corrected +=6;
    $scorePD_corrected +=5;
    $scorePT_corrected +=12;
    $scoreSC_corrected +=12;
    $scoreMA_corrected +=2;
}
if($scoreK==11){
    $scoreHS_corrected +=6;
    $scorePD_corrected +=4;
    $scorePT_corrected +=11;
    $scoreSC_corrected +=11;
    $scoreMA_corrected +=2;
}
if($scoreK==10){
    $scoreHS_corrected +=5;
    $scorePD_corrected +=4;
    $scorePT_corrected +=10;
    $scoreSC_corrected +=10;
    $scoreMA_corrected +=2;
}
if($scoreK==9){
    $scoreHS_corrected +=5;
    $scorePD_corrected +=4;
    $scorePT_corrected +=9;
    $scoreSC_corrected +=9;
    $scoreMA_corrected +=2;
}
if($scoreK==8){
    $scoreHS_corrected +=4;
    $scorePD_corrected +=3;
    $scorePT_corrected +=8;
    $scoreSC_corrected +=8;
    $scoreMA_corrected +=1;
}
if($scoreK==7){
    $scoreHS_corrected +=4;
    $scorePD_corrected +=3;
    $scorePT_corrected +=7;
    $scoreSC_corrected +=7;
    $scoreMA_corrected +=1;
}
if($scoreK==6){
    $scoreHS_corrected +=3;
    $scorePD_corrected +=2;
    $scorePT_corrected +=6;
    $scoreSC_corrected +=6;
    $scoreMA_corrected +=1;
}
if($scoreK==5){
    $scoreHS_corrected +=3;
    $scorePD_corrected +=2;
    $scorePT_corrected +=5;
    $scoreSC_corrected +=5;
    $scoreMA_corrected +=1;
}
if($scoreK==4){
    $scoreHS_corrected +=2;
    $scorePD_corrected +=2;
    $scorePT_corrected +=4;
    $scoreSC_corrected +=4;
    $scoreMA_corrected +=1;
}
if($scoreK==3){
    $scoreHS_corrected +=2;
    $scorePD_corrected +=2;
    $scorePT_corrected +=3;
    $scoreSC_corrected +=3;
    $scoreMA_corrected +=1;
}
if($scoreK==2){
    $scoreHS_corrected +=1;
    $scorePD_corrected +=1;
    $scorePT_corrected +=2;
    $scoreSC_corrected +=2;
    $scoreMA_corrected +=0;
}
if($scoreK==1){
    $scoreHS_corrected +=1;
    $scorePD_corrected +=1;
    $scorePT_corrected +=1;
    $scoreSC_corrected +=1;
    $scoreMA_corrected +=0;
}
if($scoreK==0){
    $scoreHS_corrected +=0;
    $scorePD_corrected +=0;
    $scorePT_corrected +=0;
    $scoreSC_corrected +=0;
    $scoreMA_corrected +=0;
}
$T_scoreL=0;
$T_scoreF=0;
$T_scoreK=0;
$T_scoreHS=0;
$T_scoreD=0;
$T_scoreHY=0;
$T_scorePD=0;
$T_scoreMF=0;
$T_scorePA=0;
$T_scorePT=0;
$T_scoreSC=0;
$T_scoreMA=0;
$T_scoreSI=0;


if($gender=="Male"){
    $T_scoreL=round(50+((10*($scoreL-6.45))/2.74));
    $T_scoreF=round(50+((10*($scoreF-8.3))/4.62));
    $T_scoreK=round(50+((10*($scoreK-13.9))/4.65));
    $T_scoreHS=round(50+((10*($scoreHS_corrected-13.19))/4.07));
    $T_scoreD=round(50+((10*($scoreD-20.63))/4.76));
    $T_scoreHY=round(50+((10*($scoreHY-19.31))/4.71));
    $T_scorePD=round(50+((10*($scorePD_corrected-22.22))/4.45));
    $T_scoreMF=round(50+((10*($scoreMF_male-29.21))/3.82));
    $T_scorePA=round(50+((10*($scorePA-11.12))/4.03));
    $T_scorePT=round(50+((10*($scorePT_corrected-27.9))/6.3));
    $T_scoreSC=round(50+((10*($scoreSC_corrected-29.82))/9.05));
    $T_scoreMA=round(50+((10*($scorePT_corrected-19.96))/4.4));
    $T_scoreSI=round(50+((10*($scorePA-25.86))/7.87));
}
if($gender=="Female"){

    $T_scoreL=round(50+((10*($scoreL-6.00))/2.25));
    $T_scoreF=round(50+((10*($scoreF-9.38))/5.16));
    $T_scoreK=round(50+((10*($scoreK-11.82))/3.80));
    $T_scoreHS=round(50+((10*($scoreHS_corrected-15.89))/4.88));
    $T_scoreD=round(50+((10*($scoreD-23.86))/5.08));
    $T_scoreHY=round(50+((10*($scoreHY-22.33))/5.31));
    $T_scorePD=round(50+((10*($scorePD_corrected-22.84))/4.51));
    $T_scoreMF=round(50+((10*($scoreMF_female-32.98))/3.67));
    $T_scorePA=round(50+((10*($scorePA-11.93))/4.17));
    $T_scorePT=round(50+((10*($scorePT_corrected-29.9))/6.59));
    $T_scoreSC=round(50+((10*($scoreSC_corrected-31.06))/8.2));
    $T_scoreMA=round(50+((10*($scorePT_corrected-19.72))/4.36));
    $T_scoreSI=round(50+((10*($scorePA-29.88))/7.52));
    
}


echo "<br>";


echo "<br>";




//DB INSERT
$sql2 = "INSERT INTO mmpi (patient_id,p_identity,Score_Empty,T_scoreL,T_scoreF,T_scoreK,T_scoreHS,T_scoreD,T_scoreHY,T_scorePD,T_scoreMF,T_scorePA,T_scorePT,T_scoreSC,T_scoreMA,T_scoreSI,
answer1,answer2,answer3,answer4,answer5,answer6,answer7,answer8,answer9,answer10,answer11,answer12,answer13,answer14,answer15,answer16,answer17,answer18,answer19,answer20,
answer21,answer22,answer23,answer24,answer25,answer26,answer27,answer28,answer29,answer30) 
VALUES ('$p_id','$identity','$scoreEmpty','$T_scoreL','$T_scoreF','$T_scoreK','$T_scoreHS','$T_scoreD','$T_scoreHY','$T_scorePD','$T_scoreMF', '$T_scorePA','$T_scorePT', '$T_scoreSC','$T_scoreMA','$T_scoreSI', 
'$answer1','$answer2','$answer3','$answer4','$answer5','$answer6','$answer7','$answer8','$answer9','$answer10',
'$answer11','$answer12','$answer13','$answer14','$answer15','$answer16','$answer17','$answer18','$answer19','$answer20',
'$answer21','$answer22','$answer23','$answer24','$answer25','$answer26','$answer27','$answer28','$answer29','$answer30');";
$result2=mysqli_query($con, $sql2);
$error=mysqli_error($con);
echo $error;
header("location: ../patient-page.php");


?>
<!DOCTYPE HTML>
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

</head>
<body>

<div class="chartjs-wrapper">
    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 10%; width: 10%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
    <canvas id="chartjs-0" class="chartjs" width="90" height="25" style="display: block; height: 25px; width: 90px;"></canvas>
    <script>
    	new Chart(document.getElementById("chartjs-0"),
    {"type":"line","data":{"labels":["L","F","K","Hs+ .5K","D","Hy","Pd+ .4K","Mf","Pa","Pt+ 1K","Sc+ 1K","Ma+ 2K","Si"],
    "datasets":[{"label":"Test Score","data":[<?php echo $T_scoreL?> ,<?php echo $T_scoreF ?>,<?php echo $T_scoreK ?>, <?php echo $T_scoreHS?>, <?php echo $T_scoreD ?>, <?php echo $T_scoreHY ?>, <?php echo $T_scorePD ?>, <?php echo $T_scoreMF?>, <?php echo $T_scorePA ?>, <?php echo $T_scorePT ?>, <?php echo $T_scoreSC?>, <?php echo $T_scoreMA ?>, <?php echo $T_scoreSI ?>],"fill":false,"borderColor":"rgb(75, 192, 192)","lineTension":0.1}]},
    "options":{}});
	</script>
     
</div>


</body>
</html> 