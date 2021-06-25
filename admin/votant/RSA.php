<?php define('_DEFVAR', 1); 
require  '../../../vendor/autoload.php';
require '../../functions.php';
require '../../DBconnection.php';
use TQ\Shamir\Secret;

$partie1 = '102014l2j3t0i594o4j4m3n050f03070x0r3w5s1a3c0s1m1*2v2%0s521-5a4r1p4o5k1p4l383q3x4+1e4z0-263y1h4h0z2r2s3b1k082q461:50114a5p055r3h5i4n554n5h3e5q4.0-0c1;3g4a4,4j0u440*0#3h3e125e0u1,4#0a1k3#1r4k0b4b3j4y2c3u2t4r4w1#1:220z5g410o225t455c1f3s0x0v4x5e5t3v1+4h1q0,2d5p1%320v4-0e514*4%0w3+055v2c3g5b15083t2b4c0a0j0g1o2d1.4,101k4b1+0%433c4l4#09531t1*4j3v2428250o3%2h391149465l4b1n2o3k3v2s2u32424f4.0s5n5g362%4c5g4;4;1-5q20190q0i5c2+3n3l1g1+0#5s36194,0g3s1y481t1y523e2j2y5p5r2o1,411z0x1+3x1+5u5q0,2c0:5a2k1z0l3n4a3w5d48395t0o1;5d2x4x1p3v1-3:1c4937584w5s002z1h3g1k4f2e3h472p4h0h0q2h0p4;2r0b183e1i060n2v2i1k4j0-2601454*3w3f5e2,5d4h3a4n4*130u105p2v1m0v0b2w132y3:1n3v443#171b3v59222z0q1y223f01171l1x2q3p4w092.4f135d0-2*4*3;0o5n225h3k0d35170;0j3r130q2i1c123f3o3,2o4d5l5l1%2;324.42391k3y1-4;1%073v131h1v2x0x3a3j3d22581:0d2k1a501q34595d1p1.2-540q1m2q4u1l4*3j2%3x15123o4i4m081c2x4i1e5k1e0w5q0b5f0;4k2,5g5l4a0d3v2o1i574g0r3t0c1x252,4g1;1b03422-5g1d0z0h1;3i4:5p5k1a1x5a1%2t2a2#4j4z1h4w4b3h2+1z1-1c2r5c3c0h5n3:3s4q3-5o1.4l1j1q2-451t052k5u0#1p0n4y2d415j2v4i2i0*3d4n25341r590#4i2g452m3d331o4i5e0a4b3y2r1l3l0a4g0e2n1a5g1n524d2s0h562h4.1s4i3t2n0y3r3i050l174s2-4.3u1t4l1m05182g2#2:3.2x2r1s16470%1w2.01192p4r3;1%0;3%001,1z363s0o1o47034*294m0-5d4,4m3;1k230y1f2i5r3-0m001,0+3f2d125u0a5d5g121t5l3b5h050x1-4;340l384a3o0l2*2r3-4i4.3r4x1g0g0x4z4629283#420k4j3d2l2,0n3q0w4e4;5i5m413c075q2b0w1;252z3k51572854401#1*1f4k4m143n1+1n3:1x3:1e0t122m5h0r2a2y3e4k3v0k4k1x3h0u274a4k1c4b2.3;4-2,435e1*3v2b2g0x012y014%2359381-4p1u5a5g45441t0u34300j2n2l1o4m0x3n0r2c2x0j1l2a1g244y5s2g2a3:4n3u4:16273w1*0e112.3%1-5g3u3e4r1v3b4y3h1f1,18143g4z212q3c2r4c1r2c36252r1a3u4956021x073i2z355f0o2k0m5e351p4u2r4c3p1t332p550,5f2v1q5n252l3%034.1j5g5k0p104s021o251m5t2#2h1z3f5t5p3c254+5u101o0c1v5u4q2+3z0c4;4n3e0z4d0q0.484d1l0,2i2j3,4d430f1-011b5q1m15274z4g5j380k073r1o4o584-1-5q074h4+2y4f264e244c4l100u2q2q4p042:360i4p2-0m3-381t2:3%2z4.0m1,245i4x3s1m3.5p0f2e0-1m1m5p0+5g3*3v4x1n3p592u1d2:2a3y485u4f0x5u1c1;101i1z3v2+2g1a0c0r3-4f0,5o2q3h2:4s1%1339113c422u4l2b0,5d4.4o1+315s0;234:043k440k2k2a45485c4;1n0.1*02121g3;1a4n0a0w3s3d1h4y2f012+4x26041#2c4m0x1m4t16362p252l214,2f3s2q444f2o213#1m4%4g084f1d5c3m2,110o2f2n3g315a3d5c4m311*0z4q093k2#4b390c1y2d1b0g051w3f34032%0+4h2e2j0.0g3i0p4s1o224.5d441u314r0%40112p1b0r2n5g12100s3b0-3d3u3w4.3x3*2l0h2p0710135r2:2#2u4r3%491s2j1;1c1%0s444;2c1f28194v4+0f4+3o234+2q5n3m094u2l2f034o2w5u5f0+1l4g034r2r5t180y0q1d1k251b3.0,5j0a3#352t0r4h3q27450%4l2.4#321x4t3p050o5a3*1p520y514g560%2#085p4,0y0e015k5o2y1a5i2w1t1y1s293v1j0u08402b0:0z4b0,233d22553o3n1a185o1a312i3-4:1s113v2s113y5v591;3k212l3y220*1o1s5t2y273x4g2p0-330.3q0b2c2p561x4:0u493j1v1-0c114u0s1s4+323#4-4x2l0;1n4h0y0*5c3p2q4i4k4u2v064l113*012e3y0h3c0l1f3k1b1j522%3z4v3e3o231:263r10592x3-2.1u4g5s3w5h142.2w1s4#050v331p5h272x5r122x1b340n4e4b0y102:544n2p2h0;3i4u321o3o2*520#5c300v0,2q5e3y3o045m3-0f002o083v3m1l4a4h484x2n1v223a0o4.4m4;4#4*1h3p0+0;1t2j0d5u0*04050%280e31292o0z404+492b244j5c3j5u0*29253o1f4y3,3p1-194*0b3*4f1p0p2p0t0y3q0j2c1v2u1i4y112+1*3340090a4x2c3s1l1j3k5n1a1x2q2+2m1:4e3w2i4e170*5q4f51551;355i29540.2q28381z4%5a3m36173+3i0o113*1.35442.1e5d4,2b212-0j1u2q2r1r3f2a3*5g0g195q0.5d3x4v3f3#4q472z1a5g3v3t4:0q3z5a1e3+5f39524l2w5u260y5j1j5u5l2d090r1%2f1-141,4%0v4+5a2+5q2y0b2x0i3s244z4j4u4y3%341v5m3.4j0v434w1n1x1x2p1a413c4r13195t5i1d2%0%481z2u2,2g4y0y3#31121g563o1+2a403x2f3b2x292a2r4-5k1q472,143.4a574o0*5u1,2g535i4a1h4p1v1z3l0j5h4t233k1m1u205t44104o181m3t394:010h1s0.104.2u171u1n4o1%2a2f2y0v163b';
$partie2 = '102022a3:0q5n3v1-1r1v5i495u43495p500c3u0+055d1k1-4h4#0b3h2z411z1m1x3t0l1z4x5v0e2r18250e1%560b0x4-2;3u5a0b503v151-2y0m1d3#44405d3j0:1;112y4z312k594w2d5c0c2e1u5r0u0g0k514v5s3j4x2o2u550h5j1x0z5m0g5i1,2+583.181:1i1k1u4y3k1d4l2#3w5o2c0#0m5m57132%3w5a2c0r0l0426361d3z5j2h3t2820335v0n3d3,2t553o5g3,4t2f164d3;4-1.2;0+1f0o170j1r1b064r262r3-1%0t2v0s5i1.1t1r5f162i4;58160s3s1d0l2v520a2y31470v1+1c4y2u3a4z3r113o1n1z1p2:2x1k4k4-3s3c5i0c182;5g404i0-1p435k23182f2c3u3#2b303.3d3%265p0-011p4,254i4i5j215s2x2o2m584y0x4-3j1p4;3;4q23373t1b0q092x525o024l3k153241330c5k0n0k3j5s023p0.3:5t2n022g3o4k0l5i243m423-2j1j224%2c4.032l50002x3k3,0i490y2l144z0j2,2.1z4r4#3z103*58135j5m0f0,0n0o3s1t3z5j0%2b5n321a1e0*3+5l1f3t3*1;0f2u4+41390z47313h365645400402514-5e5v2l0d5q5q5g0%2n1a3r2y1c354j1m18571u4-1%1;2j3z5r0t0o26335r3;5i47273r104k2#5u2h0l4%392i1u104a3i4t0v3u110v1o014-12125k4u191i460a4j1t0f3l175v404u3l570-453o3z134d4.2s0e3p0g4b0o412i1u46221h0.3;0838330q5c5j2p4.262:391h2e3o1h2v2m451u1:1.1f0a5r4p2m33043k263+4*3k5h5n2g0%481x1x1r0m4w1l0+4u3z3x5g1f4.1m2j5i2p2w0m2,5i421r20480-260.0r330g2.3-4v1s0q3t3#0s0u3q194f4e1e4,385t3f0s361v4702332y1q280r5e2.0l4r5f3a5r141v3z2:4x1n2c1*480k363v3f0z343j0r1e1h071t3%3y182:135h2m0a11491i1.4p4q4+0:1m3b1r2o12543u2:0*0o0u335h032b4z5m5k4t1a574l2:0r424a2;2l0o1y40432s3*0j2a2p4g484t0.4t4f3a3n0k0u2z5s1-05424%1s5q2,2,5o1e4y0q4v2c345r4v4l0a2h3s2*0i4:3l4g1;5d1.1n2-0l2.232g1.5o1%1i0*0l0+0u5q211951185b0#4u5f2r2p4c30394l1t594f0q1;5u5o2e0z1a0s1s46032m2#0j342v5k2,3n4:3p313c1#1p2g4s221+1x3n2o5t1j2b0s4k464f2z3;0r1e4z034s244c3%1x2.0d311o4c33230e1g5t2x1e2z5126455j4t0x2v2w4+420+0y4a154a0d270309582i343k5c2z1a0z2t4r2c2:1m0j0%3r3a1.5e533:4#3:4o2u4o374d1l0*2,1e091s3x3j2z003:341m4b2w2n0%3d1*093n2l4;0,2e3%0o1o0,3r45372n584h463%2w28420;1;3;184j204v4%4p2i0z4h5h0u4*0-0f190d52263w5a1u5s45213o0-350y5j1w1s0g2l4-4e3t5s1,1z352n174g4f0y2%2*123e1b1#090:0o4h3v3+0-3+3h4w4y0w46430.4r0v3g0q3e1*490%2a2p1,0,0p5v3i3x3h4:1n0y4f073h0#5h1l1e5f2m3r1m472*5o1q3y0e4:33121k011c254w3c295o4y4d5h10562z2n45341%2,0b4,534:014d1v2%0p2r2s12243;3d5p2;3c4s5j5q553y1%0b053e1h0r022x4y0t0l0m0a1f490f0q540e2o323d3l1n304y2u3c134l0e2g5i3q3g1q2i2i1#2x4#3g0w132+2,5d161o1,480o1g2i522#0o532f4e483;2h563c133,1i5u123t483*1e424r212q0d5e4;1k5r3l4647510t34394w4w515f160+1.292c0b0x4-1-0b5m582#1201392d5l0z4c4x0v4x4x08265b583g4.4i3o5h5n2%433o2u1*5r0+283g1k0p2j5n5s1f200j2k0k161*4.270c2%1:3%3l4l3y1e2y26461s393e3k0q0c153l2k3r440l4%5d0#0u1-0f5e4#3*480i3,495g0f0x2411001s442o4o0%115c3*473o190s3b03350i2x5i3h45392l0i4x3y2l2*4f5k2;490s1a1c1;0q1z4j3q031:0a0d07011z4f1z2u095a1b1c3,0m3q3p041r14520#3q5r01492-115f253d5a2d55181k3b3v2x581l415e4-075e3r2r2p2r1627070a021.1k430%2o5k0w2f3*011v173b4+0g0;4y4#2;5c2v1;1g133x3j1x5l084a3814465k3%0l5i041y1v3k0t1d574s1r2n1.4;0#3q3t5534290t3g5j390+4g4e1h223#4;4;1n2x35313u044n0*4k51150k4u5h4x2s1.3m2c4.4j203r1g584,2o5a375d4j5n2%3l0b5i3b355k4r3%2l3-5s4d0z1v180e1n3k1o1t4%521f0y2e1x1:020c0b4-1s3g4t330a4t3t0.1,4w3o2k3#0k5k1y082-3a1*3z5u3z0z2#1;5n1i1i0;0v28001.570c101u012j015c4%4#2p112s182r584y1n4t0w4q49182+5d0b0q493:5s0#2t3l32110s5v2#0q0z0h370%2.331i4z3b2l3e073n2.4s1g2j3m084x015h0h530i0v1+3z0+3i1h3z1x1-2m4p4w1h383q1s4#2u103k3;0v3a5e36071w5p5q1;0e3*022i5a012;565s2e09593b4q2+124c411p0f2,1w452n2s3y4g203w1i0s1k3o5j323c353o39512:4z4:1.251v1*240z3p162u580x4u06120w1s1w2i0r19481v5k024s2:5t4c050d0*302#3s255q023u0e0h250a282z0f542l3,2%3b2:3*2-2y2k1p4l5n0i1b311k534j252e232l0b0i1n141c4x4u3d1r1x4g1e0*2:4a1y102g1g1%0q4;2b4b021l5m0h1%3-0k1.2e1v2j2l3u4n0h1c5m';
$partie3 = '102043k0%074e0u2e1u1.3l0#4+0t0;3z2h4.5l0d5a391g1.223959024p1s1:1g1:02402526494-3v0+2m4;1u283v4;1v3i023l3p3a090z1%3%56160y0s0.3i584*145l3a203s3k2i28363h3z301;425b4+562r1x3g5g1k3#3.3l3#2t204;4p403t1u492m0i021,0d0t0+1d5f1o0+4z5p2u1%095t3q2u57415p2q2%4l3#4f1,405s5b3l334r291:4#4a563*043i2+052j5i0*2n0q10522o2f414:035e0q490%1z3v1p383r5p1n4g494k351a0q0q3n172k2m230w515t1444302o4w313x0u5i2z5s1r2v4u2g4:0b5r0n1e0-34491*0y2k0f3%3l5d0,4z2x0y1a0c0x033h2v0-3w3d0+5b1-3m0d4h172y2+4,4e0:1d2n1;22391o3y3l2w3+381o581o5i212m0e1b2l4r5l5v4f4t4j1x2t371h5v5f3r0t3t3y3+4g445t4i3b5p53534g2z4x325i1j4y3;3l4m5i0q2l1h301x2o2*3i3b1;4y3d4v0-3;0k4u3b161q4%33312g102#090;0q2608382q4n074y5t0l0:033v562t473h1g10520;3q0d4,0m2t4q361o0m5k0e5v3y0f4g2.0f033u452.1y2h4m2r423a4g3d102l0.5q325p3r1l0q173g251k271q3e5e3w5n4p313x3+573t082h0k511f3%362:3#324+2f1-5518011g4.06574:0k4t301h0+2,1a0n0*0s3:241:445a0:4a0:245k2e590%5r0i0l0;1e2.3:0g3z0501053x0z12360i5s023;3y494;2,443*1-2j364j1v3l07082z310w1;1v2t0d3r4f263+5j3k561q592s512x3q3s0;1l1r1%1#412t1-572g0x5q2x0-1#0u2v2k2o2y443u2+5p1m1z0t581w0m4j4m4c3j542a1.4g0e004.095o0u0g130*2j4n33504p51291n544t3n0:3d4j2*3h5r0-3m3x4k0#1o5p4t171b3q2,0-4v4v574e0k3.534c1u1o4a1n0s5n163j5j2v3n4t0,180p1:1v0z2b581;3-0t395q230j4r5b5d4,53393b1*362%3*2n012a113#5j0.0.3x2i5a1%13002,075n2-3t18081;5h170t3.5f4%4s4k3#1+3f0022112y43452%1p1#4e1z1;3s4g190p3l35033o4q2d4h1+15311u0e350a431r2w0*2-210f063*585o402b0q1u032f0b1d2m2,2s084p44131y2n0v4c264o3:2s5e0m5224143-3i3a4p4g493b3%051t4+3p421s0o2h1.2g2f1;042r301.3k0o1k0v0x3e0#4k0u1k4r1b1x1s5h2c3#3;4-0.1p4m1y4u0y3-4a1u411*2o0d2.2s5u4d361v5n4#4r0l5b093+2,3p46353g5a583p360:4:3i1,2q3f215g0b0o3;1*492v0c2*0;1535194p0*1d4-3c154+1q53573,430;3-1e1w3+2r0v411+3l5o2a230l3i0j4b0h595a0w4w3%371:1d5i3+2j0.0r2o5g071*2p2o1u1w384x0.374:2a13430x3t231r0q2e26310b2d4:083-502s0,113z2c2r0s4+3#2i1%4v3l5i1+1c4*4,3d085u0,1v3m515e0h090;4%064k27224k0+5n0f1x4m4h594h1+09502m2q1w0*4i3y4.4,5n1f1p501-4g560w320t0+382z5l1-134g3h245t3v1t3q0r0r3z102z123%1-2x2e0b2t022f2%2h5q3q2i4n4e2g1x2d3i1,1:4k012*3%5m2k5p4f3n4l052c3u2:310u1m3*3i55054m4b4f2y5p4i573*0v0x5d092%3-3.4l454q0z4x2u445c5t0n3u3m2n4l4#0n2c371*3o1+4+5h0b3u4j2b0j0g2l0y4g1m2h2k3a5c2w2f29055p2i354%5t5j0f415i4,5t0817011:2p37443.2#0+4j4a0:0.1,4r4t4y15202p3l5q5h1e2w1*3%4q2+284m2y233y0t4q4q1;2-0f06200d1+174o2n2p1#562a2h4q2w2%3k0.4v2u2e36023d5a0r4:3e3;2%5v1l4e2%4t5k1v2e2g574.1j13540w570e3f1x0:1n484e5h5s3q0f4p3:5r0%4y203d0d4,1k4a2s1.0#0u4w5b1r3k3u0y1#0p3y1t0#3i1.58592%075v071k4l5g4i503+3t2,4a0p493l5i275n2a3k1z2l3n1l4d070p19032m0n4u3s124v513i46190w1b3m4#2*1d1k0i4x4v073+0,011u195m3f3%1a3%523i2d4*2k2z220l14475p3-2g1i1b2x2,4q334r3c2p3b5t2m4:3v4w210p0b0-3%3u4r2-003q105j4.1q3y5c1f1q3z2%2+2n0-5d054d1%2*44194+1l0a445d4k3r3m2j0v4h040936140u3:161v0;0f5l1:3u3c4t4o364p0p1y1.0-1*0a1.2y1j37513r5n3-2g0e1k2s0j4c132w2.3i245g221b0y2h4w102y2-3a2f4t470l3l3z5m4t3j3:432:1w0n2f5r3z08552f0m400z5e1a0:2z2t054w2+101h34554s1n1q5a1*3q4n2f500k15244p2*145m2s173p485m2u0.4k000l4l1h3y1o0i0u0u2y3e1b3p4g021-4u274m2;232r365i2o0x40232x0u245p1+0x5m492+3n4r000n30552z4q47544u3*434o014%415v434v0l2i4t305l4q5h421.0n31014%2a3l2r022w4;5s26550c4r1n0y1c183j281;0.4h5o1u2m3p0:5f585h4a2+4o4j1l4d3527420o3i292q494s2,3r293v234z1s4g5s1u0x0i593f2d102e3d570k220y0j5i0v0t3l51533n57443733251q1a2m1*282l044m012x2a4z193v564,1i1u24531c0d1q2z3k2q3k2*16443*4#3u3a0k2o3.3t4#4p461z512w3-4j242x4%3l5f440-4r344823222*51104l0%1+1*2v2a1z2e3w47165r0b1p1x4,1a130l0#584o1h2.103w1w2#072m2y1c54173k4:220s4x233+1w3e2#0s2e5l1o4c';
/*$segments = array();
$segments['0'] = $partie1 ;
$segments['1'] = $partie2 ;
$segments['2'] = $partie3 ;*/
//var_dump($segments);
/*$calculMultiPartie = *///var_dump(Secret::recover(array_slice($segments, 0, 1)));
//var_dump($calculMultiPartie);

//exit;
//$pr = \shamir\RSA::load($prstr); 
//use TQ\Shamir\Secret;
$prstr='-----BEGIN PRIVATE KEY----- MIIEwAIBADANBgkqhkiG9w0BAQEFAASCBKowggSmAgEAAoIBAQDBNWbCh2E/qpBl mAYIaChTqemqF/h3TysM/LWyWTaFnyFnfxhKLyaa5AHwSUH8tewaLTyE9MyuBNjd gW1Hdnw5qYkzvA2jEtFWHCskSAphWL/vcwPCjQBqedu9+mI6sI+E+fETDkjQAB+8 xuqHc1DpxAfwM7/WqPZj0BfZrA1EMcKMRqrB/wzwS6upLpp9kq63sFev7e0KKOU7 pyCkB1qZ+nLm+bc/wesL/fGtt6p8J3GqXXyTCY30nPArS4z1Ir8JkoK1QctS+8vg VObddLEhr5ied1M+sJIoyvKl687vQaEePCd8lGtAmW/ySWpVy6CoAuF0dgCuev20 5jlUTWh/AgMBAAECggEBAKZtnp/wx/d0sD+jLYcuWZZ/5ZSsY046tuXQBZ+ks490 nOyvEThN115TC8x0/k92UfPWhawtxuYbrMdZhs2pJabyAAq9ca3INuSLDSqKl851 CZh0pYd/uBz/7SZ/uP+/OVGdj2kPw+7QPIZ7fmjBD7DeOMxTd2usTdl61iCd0Sus g80mkcNCGWZrFE7mmZ/FBRoMWmhwLIm2GTukcdyGEk0SsUxs3oxyJBiWLs1vSWzx ErZxoWoNzjDAQRxgnKiokpwAhaEbfuH1DZXXV4BXGyZR5WK6icppgtiNNCH7ot// NTde0oXl8gn6t6Jm4f9JkKXL8+ElNdi+D1gmttvfyrkCgYEA+M9mHmUKXj+6M+tK NM92edaOWJykD6KlLNJ2gK0Dm9sXwCzX57RryaYQH/C69sDWG36kc6A3tLIreUcW hKwhx3m6qfOdHidqudwxBgkG8GEFv1Lg3tV+KdvkBxB8qYhFOyJv9OuiKeXpxXrW mVZw8wBd0KI6ZgMPcN1EDY0TwisCgYEAxsqvCvlXdtwwuF3UGyLj/ED1f9hNbeU9 9BuC3ofrDwmF3/AeEdYX1+Cn9Ioje9389czx7tyOwrJYWgQOUa7vSz5Um7mWyDMi rbjAFcdoHlozYBjJCZc20Y0zMQqlEJuMPClagLudu4HMqtaA5Rzi7yO1SuEOdyGK piiqIkxFjP0CgYEAsyreVXrbGX14f5SqjhbrMNdhD8xUk/HCUeGIdiagl6YQl1Fz dCXHDKFpsSZv6+p3A7uRfrXcB2HZzm5zd7xgYr10vpdwB9vIjehS4Q61EXo8Ykaz KaPBQzFWJgQoUQiRGgE1b8ASuWsXiR5o1Gib01DrPabkuLrxbovXSo7RsJsCgYEA i1xcCl1yq6kBnr5oi/2Rxq3jbZS982TaYd9Hh6nRZ+FNMQisi+SDIpwkIpMU/SlK xSbAFKwaiPNubOya/TieGSnBNsqMohz3GsKCJsJ8g4rIqX22sjqH+6/5S1AjF9l0 Hlj/UXA1y9XbHYjzI6t0jCGEXtIXyfyBrqqjWxgNSiECgYEAiASW4AJFNcR81Egn MJBLnFc81cuF7SXYIGMP4FsMdZNHX2iGgIluaF2NWmmvMRBb4Hz5h3DzXjsX+kFc K0BzVh5vNlkNALMBveumlmgxhSOzS3jQlj+ewLSjviy1LJakPin3JKXkcxp4H95m /5kCCGVq6EljvpjUggcUOYlrKl4= -----END PRIVATE KEY-----';
/*$i = 0; $segments = array();
while($i<3){
    array_push($segments,'koko_vagabond'); $i++;
}*/
//$private = \phpseclib3\Crypt\RSA::createKey();
//$shares = Secret::share($prstr, 5, 2);
$shares = array();
$shares['0'] = $partie1;
$shares['1'] = $partie2;
$shares['2'] = $partie3;
var_dump($shares);

var_dump(Secret::recover(array_slice($shares, 0, 2)));
var_dump(Secret::recover(array_slice($shares, 1, 3)));

echo $shares['0'].'<br>------------------------------<br>';
echo $shares['1'].'<br>------------------------------<br>';
echo $shares['2'].'<br>------------------------------<br>';
echo $shares['3'].'<br>------------------------------<br>';
echo $shares['4'].'<br>------------------------------<br>';


exit;

$prstr='-----BEGIN PRIVATE KEY----- MIIEwAIBADANBgkqhkiG9w0BAQEFAASCBKowggSmAgEAAoIBAQDBNWbCh2E/qpBl mAYIaChTqemqF/h3TysM/LWyWTaFnyFnfxhKLyaa5AHwSUH8tewaLTyE9MyuBNjd gW1Hdnw5qYkzvA2jEtFWHCskSAphWL/vcwPCjQBqedu9+mI6sI+E+fETDkjQAB+8 xuqHc1DpxAfwM7/WqPZj0BfZrA1EMcKMRqrB/wzwS6upLpp9kq63sFev7e0KKOU7 pyCkB1qZ+nLm+bc/wesL/fGtt6p8J3GqXXyTCY30nPArS4z1Ir8JkoK1QctS+8vg VObddLEhr5ied1M+sJIoyvKl687vQaEePCd8lGtAmW/ySWpVy6CoAuF0dgCuev20 5jlUTWh/AgMBAAECggEBAKZtnp/wx/d0sD+jLYcuWZZ/5ZSsY046tuXQBZ+ks490 nOyvEThN115TC8x0/k92UfPWhawtxuYbrMdZhs2pJabyAAq9ca3INuSLDSqKl851 CZh0pYd/uBz/7SZ/uP+/OVGdj2kPw+7QPIZ7fmjBD7DeOMxTd2usTdl61iCd0Sus g80mkcNCGWZrFE7mmZ/FBRoMWmhwLIm2GTukcdyGEk0SsUxs3oxyJBiWLs1vSWzx ErZxoWoNzjDAQRxgnKiokpwAhaEbfuH1DZXXV4BXGyZR5WK6icppgtiNNCH7ot// NTde0oXl8gn6t6Jm4f9JkKXL8+ElNdi+D1gmttvfyrkCgYEA+M9mHmUKXj+6M+tK NM92edaOWJykD6KlLNJ2gK0Dm9sXwCzX57RryaYQH/C69sDWG36kc6A3tLIreUcW hKwhx3m6qfOdHidqudwxBgkG8GEFv1Lg3tV+KdvkBxB8qYhFOyJv9OuiKeXpxXrW mVZw8wBd0KI6ZgMPcN1EDY0TwisCgYEAxsqvCvlXdtwwuF3UGyLj/ED1f9hNbeU9 9BuC3ofrDwmF3/AeEdYX1+Cn9Ioje9389czx7tyOwrJYWgQOUa7vSz5Um7mWyDMi rbjAFcdoHlozYBjJCZc20Y0zMQqlEJuMPClagLudu4HMqtaA5Rzi7yO1SuEOdyGK piiqIkxFjP0CgYEAsyreVXrbGX14f5SqjhbrMNdhD8xUk/HCUeGIdiagl6YQl1Fz dCXHDKFpsSZv6+p3A7uRfrXcB2HZzm5zd7xgYr10vpdwB9vIjehS4Q61EXo8Ykaz KaPBQzFWJgQoUQiRGgE1b8ASuWsXiR5o1Gib01DrPabkuLrxbovXSo7RsJsCgYEA i1xcCl1yq6kBnr5oi/2Rxq3jbZS982TaYd9Hh6nRZ+FNMQisi+SDIpwkIpMU/SlK xSbAFKwaiPNubOya/TieGSnBNsqMohz3GsKCJsJ8g4rIqX22sjqH+6/5S1AjF9l0 Hlj/UXA1y9XbHYjzI6t0jCGEXtIXyfyBrqqjWxgNSiECgYEAiASW4AJFNcR81Egn MJBLnFc81cuF7SXYIGMP4FsMdZNHX2iGgIluaF2NWmmvMRBb4Hz5h3DzXjsX+kFc K0BzVh5vNlkNALMBveumlmgxhSOzS3jQlj+ewLSjviy1LJakPin3JKXkcxp4H95m /5kCCGVq6EljvpjUggcUOYlrKl4= -----END PRIVATE KEY-----';
$pr = \phpseclib3\Crypt\RSA::load($prstr); 
echo $pr; ?> <br> <?php 
echo "\n------------------------------------\n"; ?> <br> <?php
$pubstr = \phpseclib3\Crypt\RSA::load($pr->getPublicKey()); 
echo $pubstr; ?> <br> <?php 
$test = "-----BEGIN PUBLIC KEY----- MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwTVmwodhP6qQZZgGCGgo U6npqhf4d08rDPy1slk2hZ8hZ38YSi8mmuQB8ElB/LXsGi08hPTMrgTY3YFtR3Z8 OamJM7wNoxLRVhwrJEgKYVi/73MDwo0AannbvfpiOrCPhPnxEw5I0AAfvMbqh3NQ 6cQH8DO/1qj2Y9AX2awNRDHCjEaqwf8M8EurqS6afZKut7BXr+3tCijlO6cgpAda mfpy5vm3P8HrC/3xrbeqfCdxql18kwmN9JzwK0uM9SK/CZKCtUHLUvvL4FTm3XSx Ia+YnndTPrCSKMrypevO70GhHjwnfJRrQJlv8klqVcugqALhdHYArnr9tOY5VE1o fwIDAQAB -----END PUBLIC KEY-----";
$pub = '-----BEGIN PUBLIC KEY----- MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwTVmwodhP6qQZZgGCGgo U6npqhf4d08rDPy1slk2hZ8hZ38YSi8mmuQB8ElB/LXsGi08hPTMrgTY3YFtR3Z8 OamJM7wNoxLRVhwrJEgKYVi/73MDwo0AannbvfpiOrCPhPnxEw5I0AAfvMbqh3NQ 6cQH8DO/1qj2Y9AX2awNRDHCjEaqwf8M8EurqS6afZKut7BXr+3tCijlO6cgpAda mfpy5vm3P8HrC/3xrbeqfCdxql18kwmN9JzwK0uM9SK/CZKCtUHLUvvL4FTm3XSx Ia+YnndTPrCSKMrypevO70GhHjwnfJRrQJlv8klqVcugqALhdHYArnr9tOY5VE1o fwIDAQAB -----END PUBLIC KEY-----';
echo "\n------------------------------------\n"; ?> <br> <?php
echo $pub; ?> <br> <?php 
echo gettype($pubstr);
$tes = \phpseclib3\Crypt\RSA::load($pub);
echo gettype($tes);
if ($tes == $pubstr) {echo ' Equals';}else{echo ' NOT equals';}

?> <br><br><br><br><br><br><br>  <?php

    //signer le msg $dataGetMsg['contenu']
    try {
        $private = \phpseclib3\Crypt\RSA::load($prstr);
    }
    catch(Exception $e) {
        $response = ['success'=>'La clé est erronée !','type'=>'error'];
            echo json_encode($response);  exit;
    }
    $public = $private->getPublicKey(); 
    $contenu = '4';
    $msg_sign = $private->sign($contenu);
    echo urlencode($msg_sign); ?> <br><br> <?php
    echo urldecode(urlencode($msg_sign)); ?> <br><br> <?php
    echo gettype($msg_sign);
    //echo gettype($msg_sign);
    echo "\n------------------------------------\n"; ?> <br> <?php
    /*$signaturestr = '%16%9E%E6z%10y%99q%90%AEz%E6%91%E9%1F%9A%F7T%E6%C8yF%DBV%91%0D%03%D3%40%DF%CF%2A%C5%2C%2F%B1n%EB%BD4%A8.%26%1F%D6m%E1%04%81%F1%C1%BA%A31%9F%82%F3%AB%08%1B%87%A85%A7%05%0D%E1%0C%F8-%60.%11%5C%84%F7q%7E%3C%8F%9C%8D%F0%B6OY%9B%CDh%B9%8BO%BC%26%25%EE%99%09Ce%9A4%95U%C1E%2C%92_%A8%F7%8B%2C%B9%7E%95%C9%E2%AD%8A%5E%C8%EAe%B6%A9%07%10%EC%D3%AEF%26%7F%E8x%40n%10%0F%A2%10%A1i%23%2B3%D2%EB%A76%3C%95%F8%F6s%21%F3%E94%11%8A_%C3K%05%05%14%83%FD+%40%1C%7C%AB%FA%D5%EAH%DFRca%F9%DB%BAZ%C6%E1Q%D0U%0D%06%F2%F1%C4u.%F4b%0FMa%82%8DK%015%FC%FA%2A%29%F3%9C%9B%9F%FC%06%08%9B%0A%7Cy%15%7F%D6%F5%97%3D%E9%D9%EE%B9O%C5%F8%28%96L%99P%C9r%2B%19%F6b%5D%052%7C%08%BE%C5%90';
    $signature = '6%90.%BD%FA4%95%C3%C8%0A%90u%12%97w%22%C2%9F%04%3A%E7%EEfr%92%C5.h%C9%ECs%95Y%17%E1D%94%83QQ%5D%0CdO5%83%14o%DD%C4%28%F1c%00%14s-%B4%7D%AD%B6%93%CC%0D%60%0E%E2%8B%A0%AC%AB%83%2A%81%98%9Cv%C0oV%2CTR%0A%B1%BB_S%B5%C4%3D%E0%B8B%2A%DB%09%60x%8F%D8%BF%E5%83%0Es6%04%C3%89%7EY%D6T%00%DF%13%15%AC+%F4%B1%10%A1%06Nb%B4%EC%9E%BFt%99%AB%25%97%E9t%DBJ%A7+%10%F7%FA%F9%D2%D88R%9E%A5%26%02%F0K%FC%D2%60%80%A0%83%1E%80%BA%DC4%CB%EA-He%F1%D2%5C10e%F3%D2%11E%7C%3El%ED.%5D%FB%E6%EB%7B%DB%1DX%1Fy%8Ejc%AC%F2%FC%FE2Gr%9E%C6%08O%D4%8E%C1%3C%BDu%B9%3A%94%DD%D1eZc%1E%BBo%D5%F2%E6%F5%BC%BB%9A%28r%E7%BBv%82%1E%BFX%12HP%21-%D8o7%2A%D0%D4y';
    echo $public->verify('4', urldecode(urlencode($msg_sign))) ? 'verified' : 'unverified';
    //if( $public->verify('4', $msg_sign)) echo 'koko';
    $publicstr = '-----BEGIN PUBLIC KEY-----
    MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4kX1Ep1cFE8cN5pzICLO
    QjKeAMbEA/qGK69GImExWjJ/j6khV8sQ74lfraVznFEMAC2/zUVDkKPl4CbvwPYq
    DJCvh2lQMUkzuduG+Z8g9hrRvrF3MLq1/l9Ug/Wt/H0fhxAC2qegWWQF2t39PKC8
    5UcaEZbWhgN07HrwFWOZX1AZOfZfM3mM/zW7S4LBuYcOMRinNK3tCgG2RA5w/mHi
    zqGg1XFPciF7BIS1X+XCiSTLcqyLG90PuLWOAdPPn4MA4uwmv18/lUwttYj5NSUB
    ZtiDCR3hBSbzfhVQ0cXuJLFYqvkFFKYgz/Aoge4wwGpQpBJVkAEIHL6WM1aRgHX6
    zQIDAQAB
    -----END PUBLIC KEY-----';
    $public =  \phpseclib3\Crypt\RSA::load($publicstr);
    $vote_sign = 'xQ%97%C8%C399%EE%F3C%AF%C9%F4%D1%D1%EB%86P%94%9BU%28%21b%19%1AL%D9%60%ED%873%E4%C54%3C%10%02%CF%EF%1B%AF%F7%18%04%17%EE%80%B9%A8%8F%D0%B0%EB%29%BF%CD%9D%B9%3A%A7%07%E5m1%A6%1DQ2%CAG%E3%1A%DE%8Ci%18%018%5D%2A%E2Q%DA%C9%1F%7DO%E8Y%11%A1%B1%076%F6u%9Eh%1C%5Cm%F1%87%21%99%B6e%81S0%89%B7%A3%CE%AC%9A.%1Ds%FD%D3%7E%9CC%08%DF%A3%C9%A9N%95%CD%08%0D5%A4%1D%BE%1C-%ED%898s%FF%82oL%E1%12n%DD%F5%7D%12%E7%5E%84%7B%3FO%24%60%E9%95%AF%3D%14%B4%84%B5%1E5%8B%96%14%C1S%F7%B7%C5%B3q%02_%AB%CF7%F2%5B%CC%28%F0w%80%BBf%22R%7B%F8%B3%27N%2B%A79-%CE%99%CE%E1%82%FC%87v%C5A%99%18%86%D8%2B%3A%0A%7F%A2%99%21%9B%C3%E1%7F%B6%25c%9D%95%3B%8F%80%E2%E2%2F%14z%1F%D4%29%BA%3F%1E%92%EE%3B';
    $debut = 0;
    //echo 'jjjjj'.substr($vote_sign,4,4);
    $cry = '';
    while ($debut < strlen($vote_sign) - 4) { 
        $value = substr($vote_sign,$debut,4);
        $cry .= $public->encrypt($value); 
        $debut = $debut + 4;
    }
    $value = substr($vote_sign,$debut,strlen($vote_sign)%4);
    $cry .= $public->encrypt($value); 
    echo '<br>'.urlencode($cry);

    $vote_sign = 'xQ%97%C8%C399%EE%F3C%AF%C9%F4%D1%D1%EB%86P%94%9BU%28%21b%19%1AL%D9%60%ED%873%E4%C54%3C%10%02%CF%EF%1B%AF%F7%18%04%17%EE%80%B9%A8%8F%D0%B0%EB%29%BF%CD%9D%B9%3A%A7%07%E5m1%A6%1DQ2%CAG%E3%1A%DE%8Ci%18%018%5D%2A%E2Q%DA%C9%1F%7DO%E8Y%11%A1%B1%076%F6u%9Eh%1C%5Cm%F1%87%21%99%B6e%81S0%89%B7%A3%CE%AC%9A.%1Ds%FD%D3%7E%9CC%08%DF%A3%C9%A9N%95%CD%08%0D5%A4%1D%BE%1C-%ED%898s%FF%82oL%E1%12n%DD%F5%7D%12%E7%5E%84%7B%3FO%24%60%E9%95%AF%3D%14%B4%84%B5%1E5%8B%96%14%C1S%F7%B7%C5%B3q%02_%AB%CF7%F2%5B%CC%28%F0w%80%BBf%22R%7B%F8%B3%27N%2B%A79-%CE%99%CE%E1%82%FC%87v%C5A%99%18%86%D8%2B%3A%0A%7F%A2%99%21%9B%C3%E1%7F%B6%25c%9D%95%3B%8F%80%E2%E2%2F%14z%1F%D4%29%BA%3F%1E%92%EE%3B';
    $debut = 0;
    //echo 'jjjjj'.substr($vote_sign,4,4);
    $cry = '';
    while ($debut < strlen($vote_sign) - 4) { 
        $value = substr($vote_sign,$debut,4);
        $cry .= $public->encrypt($value); 
        $debut = $debut + 4;
    }
    $value = substr($vote_sign,$debut,strlen($vote_sign)%4);
    $cry .= $public->encrypt($value); 
    echo '<br>'.urlencode($cry);*/

   /* $aes = new \phpseclib3\Crypt\AES('ctr');
    $aes->setKey('abcdefghijklmnop');
    $size = 10 * 1024;
    $plaintext = '';
    for ($i = 0; $i < $size; $i++) {
              $plaintext.= 'a';
        }
    
    echo $aes->decrypt($aes->encrypt($plaintext));*/
    $chaine = "Le PHP c'est simple !";
    $vote_sign = 'xQ%97%C8%C399%EE%F3C%AF%C9%F4%D1%D1%EB%86P%94%9BU%28%21b%19%1AL%D9%60%ED%873%E4%C54%3C%10%02%CF%EF%1B%AF%F7%18%04%17%EE%80%B9%A8%8F%D0%B0%EB%29%BF%CD%9D%B9%3A%A7%07%E5m1%A6%1DQ2%CAG%E3%1A%DE%8Ci%18%018%5D%2A%E2Q%DA%C9%1F%7DO%E8Y%11%A1%B1%076%F6u%9Eh%1C%5Cm%F1%87%21%99%B6e%81S0%89%B7%A3%CE%AC%9A.%1Ds%FD%D3%7E%9CC%08%DF%A3%C9%A9N%95%CD%08%0D5%A4%1D%BE%1C-%ED%898s%FF%82oL%E1%12n%DD%F5%7D%12%E7%5E%84%7B%3FO%24%60%E9%95%AF%3D%14%B4%84%B5%1E5%8B%96%14%C1S%F7%B7%C5%B3q%02_%AB%CF7%F2%5B%CC%28%F0w%80%BBf%22R%7B%F8%B3%27N%2B%A79-%CE%99%CE%E1%82%FC%87v%C5A%99%18%86%D8%2B%3A%0A%7F%A2%99%21%9B%C3%E1%7F%B6%25c%9D%95%3B%8F%80%E2%E2%2F%14z%1F%D4%29%BA%3F%1E%92%EE%3B';
    
    $key_password = "la clé";

    // CRYPTER
    $encrypted_chaine = openssl_encrypt($vote_sign, "AES-128-ECB" ,$key_password);
    var_dump($encrypted_chaine);

    // Affiche : string 'QlzbS3go1q/qBfykOxDj+g==' (length=24)
    // DECRYPTER
    $decrypted_chaine = openssl_decrypt($encrypted_chaine, "AES-128-ECB" ,
$key_password);
    var_dump($decrypted_chaine);    ?>  <br> <?php echo '-------------------------'; ?>  <br> <?php 
    $aes_key = ''; 
    $aes_key .= time();
    //crypt AES_key with RSA key of session vote
    $aes_key_crypted = urlencode($public->encrypt($aes_key));
    $cry1 = $public->encrypt($aes_key);
    $cry2 = $public->encrypt($aes_key);
    echo $cry1 . '<br> heloo <br>';
    echo $cry2 . '<br> heloo <br>';
    $rsa_private_key = '-----BEGIN PRIVATE KEY----- MIIEwAIBADANBgkqhkiG9w0BAQEFAASCBKowggSmAgEAAoIBAQDBNWbCh2E/qpBl mAYIaChTqemqF/h3TysM/LWyWTaFnyFnfxhKLyaa5AHwSUH8tewaLTyE9MyuBNjd gW1Hdnw5qYkzvA2jEtFWHCskSAphWL/vcwPCjQBqedu9+mI6sI+E+fETDkjQAB+8 xuqHc1DpxAfwM7/WqPZj0BfZrA1EMcKMRqrB/wzwS6upLpp9kq63sFev7e0KKOU7 pyCkB1qZ+nLm+bc/wesL/fGtt6p8J3GqXXyTCY30nPArS4z1Ir8JkoK1QctS+8vg VObddLEhr5ied1M+sJIoyvKl687vQaEePCd8lGtAmW/ySWpVy6CoAuF0dgCuev20 5jlUTWh/AgMBAAECggEBAKZtnp/wx/d0sD+jLYcuWZZ/5ZSsY046tuXQBZ+ks490 nOyvEThN115TC8x0/k92UfPWhawtxuYbrMdZhs2pJabyAAq9ca3INuSLDSqKl851 CZh0pYd/uBz/7SZ/uP+/OVGdj2kPw+7QPIZ7fmjBD7DeOMxTd2usTdl61iCd0Sus g80mkcNCGWZrFE7mmZ/FBRoMWmhwLIm2GTukcdyGEk0SsUxs3oxyJBiWLs1vSWzx ErZxoWoNzjDAQRxgnKiokpwAhaEbfuH1DZXXV4BXGyZR5WK6icppgtiNNCH7ot// NTde0oXl8gn6t6Jm4f9JkKXL8+ElNdi+D1gmttvfyrkCgYEA+M9mHmUKXj+6M+tK NM92edaOWJykD6KlLNJ2gK0Dm9sXwCzX57RryaYQH/C69sDWG36kc6A3tLIreUcW hKwhx3m6qfOdHidqudwxBgkG8GEFv1Lg3tV+KdvkBxB8qYhFOyJv9OuiKeXpxXrW mVZw8wBd0KI6ZgMPcN1EDY0TwisCgYEAxsqvCvlXdtwwuF3UGyLj/ED1f9hNbeU9 9BuC3ofrDwmF3/AeEdYX1+Cn9Ioje9389czx7tyOwrJYWgQOUa7vSz5Um7mWyDMi rbjAFcdoHlozYBjJCZc20Y0zMQqlEJuMPClagLudu4HMqtaA5Rzi7yO1SuEOdyGK piiqIkxFjP0CgYEAsyreVXrbGX14f5SqjhbrMNdhD8xUk/HCUeGIdiagl6YQl1Fz dCXHDKFpsSZv6+p3A7uRfrXcB2HZzm5zd7xgYr10vpdwB9vIjehS4Q61EXo8Ykaz KaPBQzFWJgQoUQiRGgE1b8ASuWsXiR5o1Gib01DrPabkuLrxbovXSo7RsJsCgYEA i1xcCl1yq6kBnr5oi/2Rxq3jbZS982TaYd9Hh6nRZ+FNMQisi+SDIpwkIpMU/SlK xSbAFKwaiPNubOya/TieGSnBNsqMohz3GsKCJsJ8g4rIqX22sjqH+6/5S1AjF9l0 Hlj/UXA1y9XbHYjzI6t0jCGEXtIXyfyBrqqjWxgNSiECgYEAiASW4AJFNcR81Egn MJBLnFc81cuF7SXYIGMP4FsMdZNHX2iGgIluaF2NWmmvMRBb4Hz5h3DzXjsX+kFc K0BzVh5vNlkNALMBveumlmgxhSOzS3jQlj+ewLSjviy1LJakPin3JKXkcxp4H95m /5kCCGVq6EljvpjUggcUOYlrKl4= -----END PRIVATE KEY-----';
    echo decrypt_aes_key($bdd,$rsa_private_key,$cry1). '<br> heloo <br>';
    echo decrypt_aes_key($bdd,$rsa_private_key,$cry2). '<br> heloo <br>';
    var_dump($aes_key_crypted);
    $reqGetRow = $bdd->query('SELECT * FROM votes WHERE ID_vote = 1624537856');
                    //$reqGetRow->execute(array($id_vote));
                    $row = $reqGetRow->fetch();
                    echo $row['ID_vote'].'<br>';
                    echo $row['signature_vote'].'<br>';
                    echo $row['AES_key'].'<br>';
                    echo decrypt_aes_key($bdd,$rsa_private_key,$row['AES_key']). '<br> heloo <br>';
    
    
    /*// Affiche : string 'Le PHP c'est simple !' (length=21)
    $aes_crypted_key = '1624535978';
    //$aes_crypted_key .= time();
    $cipher = $public->encrypt($aes_crypted_key);
    //$cipher =  urlencode($cipher);
    
    echo $cipher.'<br>';
    //echo urldecode($cipher).'<br>';

    echo mb_convert_encoding($cipher, 'UTF-8');
    

    //$ciphertext = urlencode($public->encrypt($aes_crypted_key));
   echo decrypt_aes_key($bdd,$rsa_private_key,mb_conver($cipher));*/


exit;





/************************* */

$private = \phpseclib3\Crypt\RSA::createKey();
$public = $private->getPublicKey();
$plaintext = 'text en clair';
$ciphertext = $public->encrypt($plaintext);
echo $ciphertext; ?> <br> <?php
echo "\n------------------------------------\n"; ?> <br> <?php
echo $private->decrypt($ciphertext); ?> <br> <?php
echo "\n------------------------------------\n"; ?> <br> <?php
echo $private; ?> <br> <?php
//$this->modulus, $this->publicExponent, $this->exponent, $this->primes, $this->exponents, $this->coefficients, $this->password, $options
echo "\n------------------------------------\n"; ?> <br> <?php
echo $public;
echo "\n------------------------------------\n"; ?> <br> <?php
/************************* */

$privatekey = new PrivateKey;
//$privatekey->$private->modulus = $n;
//$privatekey->k = $bits >> 3;
$privatekey->$private->publicExponent = $e;
//$privatekey->$private->exponent = $d;
//$privatekey->$private->privateExponent = $e;
$privatekey->primes = $private->primes;
$privatekey->exponents = $private->exponents;
$privatekey->coefficients = $private->coefficients;
echo "\n------------------------------------\n"; ?> <br> <?php
//echo $privatekey;

?>

