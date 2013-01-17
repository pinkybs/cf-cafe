<?php

class MyLib_OpenPNE_KtaiEmoji_Softbank extends MyLib_OpenPNE_KtaiEmoji_Common
{
    /**
     * constructor
     */
    function MyLib_OpenPNE_KtaiEmoji_Softbank()
    {
        $this->carrier_id = 's';
        $this->value_list = array(
            1 => 'G!',
            2 => 'G"',
            3 => 'G#',
            4 => 'G$',
            5 => 'G%',
            6 => 'G&',
            7 => 'G\'',
            8 => 'G(',
            9 => 'G)',
            10 => 'G*',
            11 => 'G+',
            12 => 'G,',
            13 => 'G-',
            14 => 'G.',
            15 => 'G/',
            16 => 'G0',
            17 => 'G1',
            18 => 'G2',
            19 => 'G3',
            20 => 'G4',
            21 => 'G5',
            22 => 'G6',
            23 => 'G7',
            24 => 'G8',
            25 => 'G9',
            26 => 'G:',
            27 => 'G;',
            28 => 'G<',
            29 => 'G=',
            30 => 'G>',
            31 => 'G?',
            32 => 'G@',
            33 => 'GA',
            34 => 'GB',
            35 => 'GC',
            36 => 'GD',
            37 => 'GE',
            38 => 'GF',
            39 => 'GG',
            40 => 'GH',
            41 => 'GI',
            42 => 'GJ',
            43 => 'GK',
            44 => 'GL',
            45 => 'GM',
            46 => 'GN',
            47 => 'GO',
            48 => 'GP',
            49 => 'GQ',
            50 => 'GR',
            51 => 'GS',
            52 => 'GT',
            53 => 'GU',
            54 => 'GV',
            55 => 'GW',
            56 => 'GX',
            57 => 'GY',
            58 => 'GZ',
            59 => 'G[',
            60 => 'G\\',
            61 => 'G]',
            62 => 'G^',
            63 => 'G_',
            64 => 'G`',
            65 => 'Ga',
            66 => 'Gb',
            67 => 'Gc',
            68 => 'Gd',
            69 => 'Ge',
            70 => 'Gf',
            71 => 'Gg',
            72 => 'Gh',
            73 => 'Gi',
            74 => 'Gj',
            75 => 'Gk',
            76 => 'Gl',
            77 => 'Gm',
            78 => 'Gn',
            79 => 'Go',
            80 => 'Gp',
            81 => 'Gq',
            82 => 'Gr',
            83 => 'Gs',
            84 => 'Gt',
            85 => 'Gu',
            86 => 'Gv',
            87 => 'Gw',
            88 => 'Gx',
            89 => 'Gy',
            90 => 'Gz',
            91 => 'E!',
            92 => 'E"',
            93 => 'E#',
            94 => 'E$',
            95 => 'E%',
            96 => 'E&',
            97 => 'E\'',
            98 => 'E(',
            99 => 'E)',
            100 => 'E*',
            101 => 'E+',
            102 => 'E,',
            103 => 'E-',
            104 => 'E.',
            105 => 'E/',
            106 => 'E0',
            107 => 'E1',
            108 => 'E2',
            109 => 'E3',
            110 => 'E4',
            111 => 'E5',
            112 => 'E6',
            113 => 'E7',
            114 => 'E8',
            115 => 'E9',
            116 => 'E:',
            117 => 'E;',
            118 => 'E<',
            119 => 'E=',
            120 => 'E>',
            121 => 'E?',
            122 => 'E@',
            123 => 'EA',
            124 => 'EB',
            125 => 'EC',
            126 => 'ED',
            127 => 'EE',
            128 => 'EF',
            129 => 'EG',
            130 => 'EH',
            131 => 'EI',
            132 => 'EJ',
            133 => 'EK',
            134 => 'EL',
            135 => 'EM',
            136 => 'EN',
            137 => 'EO',
            138 => 'EP',
            139 => 'EQ',
            140 => 'ER',
            141 => 'ES',
            142 => 'ET',
            143 => 'EU',
            144 => 'EV',
            145 => 'EW',
            146 => 'EX',
            147 => 'EY',
            148 => 'EZ',
            149 => 'E[',
            150 => 'E\\',
            151 => 'E]',
            152 => 'E^',
            153 => 'E_',
            154 => 'E`',
            155 => 'Ea',
            156 => 'Eb',
            157 => 'Ec',
            158 => 'Ed',
            159 => 'Ee',
            160 => 'Ef',
            161 => 'Eg',
            162 => 'Eh',
            163 => 'Ei',
            164 => 'Ej',
            165 => 'Ek',
            166 => 'El',
            167 => 'Em',
            168 => 'En',
            169 => 'Eo',
            170 => 'Ep',
            171 => 'Eq',
            172 => 'Er',
            173 => 'Es',
            174 => 'Et',
            175 => 'Eu',
            176 => 'Ev',
            177 => 'Ew',
            178 => 'Ex',
            179 => 'Ey',
            180 => 'Ez',
            181 => 'F!',
            182 => 'F"',
            183 => 'F#',
            184 => 'F$',
            185 => 'F%',
            186 => 'F&',
            187 => 'F\'',
            188 => 'F(',
            189 => 'F)',
            190 => 'F*',
            191 => 'F+',
            192 => 'F,',
            193 => 'F-',
            194 => 'F.',
            195 => 'F/',
            196 => 'F0',
            197 => 'F1',
            198 => 'F2',
            199 => 'F3',
            200 => 'F4',
            201 => 'F5',
            202 => 'F6',
            203 => 'F7',
            204 => 'F8',
            205 => 'F9',
            206 => 'F:',
            207 => 'F;',
            208 => 'F<',
            209 => 'F=',
            210 => 'F>',
            211 => 'F?',
            212 => 'F@',
            213 => 'FA',
            214 => 'FB',
            215 => 'FC',
            216 => 'FD',
            217 => 'FE',
            218 => 'FF',
            219 => 'FG',
            220 => 'FH',
            221 => 'FI',
            222 => 'FJ',
            223 => 'FK',
            224 => 'FL',
            225 => 'FM',
            226 => 'FN',
            227 => 'FO',
            228 => 'FP',
            229 => 'FQ',
            230 => 'FR',
            231 => 'FS',
            232 => 'FT',
            233 => 'FU',
            234 => 'FV',
            235 => 'FW',
            236 => 'FX',
            237 => 'FY',
            238 => 'FZ',
            239 => 'F[',
            240 => 'F\\',
            241 => 'F]',
            242 => 'F^',
            243 => 'F_',
            244 => 'F`',
            245 => 'Fa',
            246 => 'Fb',
            247 => 'Fc',
            248 => 'Fd',
            249 => 'Fe',
            250 => 'Ff',
            251 => 'Fg',
            252 => 'Fh',
            253 => 'Fi',
            254 => 'Fj',
            255 => 'Fk',
            256 => 'Fl',
            257 => 'Fm',
            258 => 'Fn',
            259 => 'Fo',
            260 => 'Fp',
            261 => 'Fq',
            262 => 'Fr',
            263 => 'Fs',
            264 => 'Ft',
            265 => 'Fu',
            266 => 'Fv',
            267 => 'Fw',
            268 => 'Fx',
            269 => 'Fy',
            270 => 'Fz',
            271 => 'O!',
            272 => 'O"',
            273 => 'O#',
            274 => 'O$',
            275 => 'O%',
            276 => 'O&',
            277 => 'O\'',
            278 => 'O(',
            279 => 'O)',
            280 => 'O*',
            281 => 'O+',
            282 => 'O,',
            283 => 'O-',
            284 => 'O.',
            285 => 'O/',
            286 => 'O0',
            287 => 'O1',
            288 => 'O2',
            289 => 'O3',
            290 => 'O4',
            291 => 'O5',
            292 => 'O6',
            293 => 'O7',
            294 => 'O8',
            295 => 'O9',
            296 => 'O:',
            297 => 'O;',
            298 => 'O<',
            299 => 'O=',
            300 => 'O>',
            301 => 'O?',
            302 => 'O@',
            303 => 'OA',
            304 => 'OB',
            305 => 'OC',
            306 => 'OD',
            307 => 'OE',
            308 => 'OF',
            309 => 'OG',
            310 => 'OH',
            311 => 'OI',
            312 => 'OJ',
            313 => 'OK',
            314 => 'OL',
            315 => 'OM',
            316 => 'ON',
            317 => 'OO',
            318 => 'OP',
            319 => 'OQ',
            320 => 'OR',
            321 => 'OS',
            322 => 'OT',
            323 => 'OU',
            324 => 'OV',
            325 => 'OW',
            326 => 'OX',
            327 => 'OY',
            328 => 'OZ',
            329 => 'O[',
            330 => 'O\\',
            331 => 'O]',
            332 => 'O^',
            333 => 'O_',
            334 => 'O`',
            335 => 'Oa',
            336 => 'Ob',
            337 => 'Oc',
            338 => 'Od',
            339 => 'Oe',
            340 => 'Of',
            341 => 'Og',
            342 => 'Oh',
            343 => 'Oi',
            344 => 'Oj',
            345 => 'Ok',
            346 => 'Ol',
            347 => 'Om',
            348 => 'P!',
            349 => 'P"',
            350 => 'P#',
            351 => 'P$',
            352 => 'P%',
            353 => 'P&',
            354 => 'P\'',
            355 => 'P(',
            356 => 'P)',
            357 => 'P*',
            358 => 'P+',
            359 => 'P,',
            360 => 'P-',
            361 => 'P.',
            362 => 'P/',
            363 => 'P0',
            364 => 'P1',
            365 => 'P2',
            366 => 'P3',
            367 => 'P4',
            368 => 'P5',
            369 => 'P6',
            370 => 'P7',
            371 => 'P8',
            372 => 'P9',
            373 => 'P:',
            374 => 'P;',
            375 => 'P<',
            376 => 'P=',
            377 => 'P>',
            378 => 'P?',
            379 => 'P@',
            380 => 'PA',
            381 => 'PB',
            382 => 'PC',
            383 => 'PD',
            384 => 'PE',
            385 => 'PF',
            386 => 'PG',
            387 => 'PH',
            388 => 'PI',
            389 => 'PJ',
            390 => 'PK',
            391 => 'PL',
            392 => 'PM',
            393 => 'PN',
            394 => 'PO',
            395 => 'PP',
            396 => 'PQ',
            397 => 'PR',
            398 => 'PS',
            399 => 'PT',
            400 => 'PU',
            401 => 'PV',
            402 => 'PW',
            403 => 'PX',
            404 => 'PY',
            405 => 'PZ',
            406 => 'P[',
            407 => 'P\\',
            408 => 'P]',
            409 => 'P^',
            410 => 'P_',
            411 => 'P`',
            412 => 'Pa',
            413 => 'Pb',
            414 => 'Pc',
            415 => 'Pd',
            416 => 'Pe',
            417 => 'Pf',
            418 => 'Pg',
            419 => 'Ph',
            420 => 'Pi',
            421 => 'Pj',
            422 => 'Pk',
            423 => 'Pl',
            424 => 'Q!',
            425 => 'Q"',
            426 => 'Q#',
            427 => 'Q$',
            428 => 'Q%',
            429 => 'Q&',
            430 => 'Q\'',
            431 => 'Q(',
            432 => 'Q)',
            433 => 'Q*',
            434 => 'Q+',
            435 => 'Q,',
            436 => 'Q-',
            437 => 'Q.',
            438 => 'Q/',
            439 => 'Q0',
            440 => 'Q1',
            441 => 'Q2',
            442 => 'Q3',
            443 => 'Q4',
            444 => 'Q5',
            445 => 'Q6',
            446 => 'Q7',
            447 => 'Q8',
            448 => 'Q9',
            449 => 'Q:',
            450 => 'Q;',
            451 => 'Q<',
            452 => 'Q=',
            453 => 'Q>',
            454 => 'Q?',
            455 => 'Q@',
            456 => 'QA',
            457 => 'QB',
            458 => 'QC',
            459 => 'QD',
            460 => 'QE',
            461 => 'QF',
            462 => 'QG',
            463 => 'QH',
            464 => 'QI',
            465 => 'QJ',
            466 => 'QK',
            467 => 'QL',
            468 => 'QM',
            469 => 'QN',
            470 => 'QO',
            471 => 'QP',
            472 => 'QQ',
            473 => 'QR',
            474 => 'QS',
            475 => 'QT',
            476 => 'QU',
            477 => 'QV',
            478 => 'QW',
            479 => 'QX',
            480 => 'QY',
            481 => 'QZ',
            482 => 'Q[',
            483 => 'Q\\',
            484 => 'Q]',
            485 => 'Q^',
        );
        foreach ($this->value_list as $key => $value) {
            $this->value_list[$key] = pack('c5', 0x1b, 0x24, ord($value[0]), ord($value[1]), 0x0f);
        }
        
        $this->unicode_value_list = array(
            1 => '&#xE001;', //$G!
            2 => '&#xE002;', //$G"
            3 => '&#xE003;', //$G#
            4 => '&#xE004;', //$G$
            5 => '&#xE005;', //$G%
            6 => '&#xE006;', //$G&
            7 => '&#xE007;', //$G'
            8 => '&#xE008;', //$G(
            9 => '&#xE009;', //$G)
            10 => '&#xE00A;', //$G*
            11 => '&#xE00B;', //$G+
            12 => '&#xE00C;', //$G,
            13 => '&#xE00D;', //$G-
            14 => '&#xE00E;', //$G.
            15 => '&#xE00F;', //$G/
            16 => '&#xE010;', //$G0
            17 => '&#xE011;', //$G1
            18 => '&#xE012;', //$G2
            19 => '&#xE013;', //$G3
            20 => '&#xE014;', //$G4
            21 => '&#xE015;', //$G5
            22 => '&#xE016;', //$G6
            23 => '&#xE017;', //$G7
            24 => '&#xE018;', //$G8
            25 => '&#xE019;', //$G9
            26 => '&#xE01A;', //$G:
            27 => '&#xE01B;', //$G;
            28 => '&#xE01C;', //$G<
            29 => '&#xE01D;', //$G=
            30 => '&#xE01E;', //$G>
            31 => '&#xE01F;', //$G?
            32 => '&#xE020;', //$G@
            33 => '&#xE021;', //$GA
            34 => '&#xE022;', //$GB
            35 => '&#xE023;', //$GC
            36 => '&#xE024;', //$GD
            37 => '&#xE025;', //$GE
            38 => '&#xE026;', //$GF
            39 => '&#xE027;', //$GG
            40 => '&#xE028;', //$GH
            41 => '&#xE029;', //$GI
            42 => '&#xE02A;', //$GJ
            43 => '&#xE02B;', //$GK
            44 => '&#xE02C;', //$GL
            45 => '&#xE02D;', //$GM
            46 => '&#xE02E;', //$GN
            47 => '&#xE02F;', //$GO
            48 => '&#xE030;', //$GP
            49 => '&#xE031;', //$GQ
            50 => '&#xE032;', //$GR
            51 => '&#xE033;', //$GS
            52 => '&#xE034;', //$GT
            53 => '&#xE035;', //$GU
            54 => '&#xE036;', //$GV
            55 => '&#xE037;', //$GW
            56 => '&#xE038;', //$GX
            57 => '&#xE039;', //$GY
            58 => '&#xE03A;', //$GZ
            59 => '&#xE03B;', //$G[
            60 => '&#xE03C;', //$G\
            61 => '&#xE03D;', //$G]
            62 => '&#xE03E;', //$G^
            63 => '&#xE03F;', //$G_
            64 => '&#xE040;', //$G`
            65 => '&#xE041;', //$Ga
            66 => '&#xE042;', //$Gb
            67 => '&#xE043;', //$Gc
            68 => '&#xE044;', //$Gd
            69 => '&#xE045;', //$Ge
            70 => '&#xE046;', //$Gf
            71 => '&#xE047;', //$Gg
            72 => '&#xE048;', //$Gh
            73 => '&#xE049;', //$Gi
            74 => '&#xE04A;', //$Gj
            75 => '&#xE04B;', //$Gk
            76 => '&#xE04C;', //$Gl
            77 => '&#xE04D;', //$Gm
            78 => '&#xE04E;', //$Gn
            79 => '&#xE04F;', //$Go
            80 => '&#xE050;', //$Gp
            81 => '&#xE051;', //$Gq
            82 => '&#xE052;', //$Gr
            83 => '&#xE053;', //$Gs
            84 => '&#xE054;', //$Gt
            85 => '&#xE055;', //$Gu
            86 => '&#xE056;', //$Gv
            87 => '&#xE057;', //$Gw
            88 => '&#xE058;', //$Gx
            89 => '&#xE059;', //$Gy
            90 => '&#xE05A;', //$Gz
            91 => '&#xE101;', //$E!
            92 => '&#xE102;', //$E"
            93 => '&#xE103;', //$E#
            94 => '&#xE104;', //$E$
            95 => '&#xE105;', //$E%
            96 => '&#xE106;', //$E&
            97 => '&#xE107;', //$E'
            98 => '&#xE108;', //$E(
            99 => '&#xE109;', //$E)
            100 => '&#xE10A;', //$E*
            101 => '&#xE10B;', //$E+
            102 => '&#xE10C;', //$E,
            103 => '&#xE10D;', //$E-
            104 => '&#xE10E;', //$E.
            105 => '&#xE10F;', //$E/
            106 => '&#xE110;', //$E0
            107 => '&#xE111;', //$E1
            108 => '&#xE112;', //$E2
            109 => '&#xE113;', //$E3
            110 => '&#xE114;', //$E4
            111 => '&#xE115;', //$E5
            112 => '&#xE116;', //$E6
            113 => '&#xE117;', //$E7
            114 => '&#xE118;', //$E8
            115 => '&#xE119;', //$E9
            116 => '&#xE11A;', //$E:
            117 => '&#xE11B;', //$E;
            118 => '&#xE11C;', //$E<
            119 => '&#xE11D;', //$E=
            120 => '&#xE11E;', //$E>
            121 => '&#xE11F;', //$E?
            122 => '&#xE120;', //$E@
            123 => '&#xE121;', //$EA
            124 => '&#xE122;', //$EB
            125 => '&#xE123;', //$EC
            126 => '&#xE124;', //$ED
            127 => '&#xE125;', //$EE
            128 => '&#xE126;', //$EF
            129 => '&#xE127;', //$EG
            130 => '&#xE128;', //$EH
            131 => '&#xE129;', //$EI
            132 => '&#xE12A;', //$EJ
            133 => '&#xE12B;', //$EK
            134 => '&#xE12C;', //$EL
            135 => '&#xE12D;', //$EM
            136 => '&#xE12E;', //$EN
            137 => '&#xE12F;', //$EO
            138 => '&#xE130;', //$EP
            139 => '&#xE131;', //$EQ
            140 => '&#xE132;', //$ER
            141 => '&#xE133;', //$ES
            142 => '&#xE134;', //$ET
            143 => '&#xE135;', //$EU
            144 => '&#xE136;', //$EV
            145 => '&#xE137;', //$EW
            146 => '&#xE138;', //$EX
            147 => '&#xE139;', //$EY
            148 => '&#xE13A;', //$EZ
            149 => '&#xE13B;', //$E[
            150 => '&#xE13C;', //$E\
            151 => '&#xE13D;', //$E]
            152 => '&#xE13E;', //$E^
            153 => '&#xE13F;', //$E_
            154 => '&#xE140;', //$E`
            155 => '&#xE141;', //$Ea
            156 => '&#xE142;', //$Eb
            157 => '&#xE143;', //$Ec
            158 => '&#xE144;', //$Ed
            159 => '&#xE145;', //$Ee
            160 => '&#xE146;', //$Ef
            161 => '&#xE147;', //$Eg
            162 => '&#xE148;', //$Eh
            163 => '&#xE149;', //$Ei
            164 => '&#xE14A;', //$Ej
            165 => '&#xE14B;', //$Ek
            166 => '&#xE14C;', //$El
            167 => '&#xE14D;', //$Em
            168 => '&#xE14E;', //$En
            169 => '&#xE14F;', //$Eo
            170 => '&#xE150;', //$Ep
            171 => '&#xE151;', //$Eq
            172 => '&#xE152;', //$Er
            173 => '&#xE153;', //$Es
            174 => '&#xE154;', //$Et
            175 => '&#xE155;', //$Eu
            176 => '&#xE156;', //$Ev
            177 => '&#xE157;', //$Ew
            178 => '&#xE158;', //$Ex
            179 => '&#xE159;', //$Ey
            180 => '&#xE15A;', //$Ez
            181 => '&#xE201;', //$F!
            182 => '&#xE202;', //$F"
            183 => '&#xE203;', //$F#
            184 => '&#xE204;', //$F$
            185 => '&#xE205;', //$F%
            186 => '&#xE206;', //$F&
            187 => '&#xE207;', //$F'
            188 => '&#xE208;', //$F(
            189 => '&#xE209;', //$F)
            190 => '&#xE20A;', //$F*
            191 => '&#xE20B;', //$F+
            192 => '&#xE20C;', //$F,
            193 => '&#xE20D;', //$F-
            194 => '&#xE20E;', //$F.
            195 => '&#xE20F;', //$F/
            196 => '&#xE210;', //$F0
            197 => '&#xE211;', //$F1
            198 => '&#xE212;', //$F2
            199 => '&#xE213;', //$F3
            200 => '&#xE214;', //$F4
            201 => '&#xE215;', //$F5
            202 => '&#xE216;', //$F6
            203 => '&#xE217;', //$F7
            204 => '&#xE218;', //$F8
            205 => '&#xE219;', //$F9
            206 => '&#xE21A;', //$F:
            207 => '&#xE21B;', //$F;
            208 => '&#xE21C;', //$F<
            209 => '&#xE21D;', //$F=
            210 => '&#xE21E;', //$F>
            211 => '&#xE21F;', //$F?
            212 => '&#xE220;', //$F@
            213 => '&#xE221;', //$FA
            214 => '&#xE222;', //$FB
            215 => '&#xE223;', //$FC
            216 => '&#xE224;', //$FD
            217 => '&#xE225;', //$FE
            218 => '&#xE226;', //$FF
            219 => '&#xE227;', //$FG
            220 => '&#xE228;', //$FH
            221 => '&#xE229;', //$FI
            222 => '&#xE22A;', //$FJ
            223 => '&#xE22B;', //$FK
            224 => '&#xE22C;', //$FL
            225 => '&#xE22D;', //$FM
            226 => '&#xE22E;', //$FN
            227 => '&#xE22F;', //$FO
            228 => '&#xE230;', //$FP
            229 => '&#xE231;', //$FQ
            230 => '&#xE232;', //$FR
            231 => '&#xE233;', //$FS
            232 => '&#xE234;', //$FT
            233 => '&#xE235;', //$FU
            234 => '&#xE236;', //$FV
            235 => '&#xE237;', //$FW
            236 => '&#xE238;', //$FX
            237 => '&#xE239;', //$FY
            238 => '&#xE23A;', //$FZ
            239 => '&#xE23B;', //$F[
            240 => '&#xE23C;', //$F\
            241 => '&#xE23D;', //$F]
            242 => '&#xE23E;', //$F^
            243 => '&#xE23F;', //$F_
            244 => '&#xE240;', //$F`
            245 => '&#xE241;', //$Fa
            246 => '&#xE242;', //$Fb
            247 => '&#xE243;', //$Fc
            248 => '&#xE244;', //$Fd
            249 => '&#xE245;', //$Fe
            250 => '&#xE246;', //$Ff
            251 => '&#xE247;', //$Fg
            252 => '&#xE248;', //$Fh
            253 => '&#xE249;', //$Fi
            254 => '&#xE24A;', //$Fj
            255 => '&#xE24B;', //$Fk
            256 => '&#xE24C;', //$Fl
            257 => '&#xE24D;', //$Fm
            258 => '&#xE24E;', //$Fn
            259 => '&#xE24F;', //$Fo
            260 => '&#xE250;', //$Fp
            261 => '&#xE251;', //$Fq
            262 => '&#xE252;', //$Fr
            263 => '&#xE253;', //$Fs
            264 => '&#xE254;', //$Ft
            265 => '&#xE255;', //$Fu
            266 => '&#xE256;', //$Fv
            267 => '&#xE257;', //$Fw
            268 => '&#xE258;', //$Fx
            269 => '&#xE259;', //$Fy
            270 => '&#xE25A;', //$Fz
            271 => '&#xE301;', //$O!
            272 => '&#xE302;', //$O"
            273 => '&#xE303;', //$O#
            274 => '&#xE304;', //$O$
            275 => '&#xE305;', //$O%
            276 => '&#xE306;', //$O&
            277 => '&#xE307;', //$O'
            278 => '&#xE308;', //$O(
            279 => '&#xE309;', //$O)
            280 => '&#xE30A;', //$O*
            281 => '&#xE30B;', //$O+
            282 => '&#xE30C;', //$O,
            283 => '&#xE30D;', //$O-
            284 => '&#xE30E;', //$O.
            285 => '&#xE30F;', //$O/
            286 => '&#xE310;', //$O0
            287 => '&#xE311;', //$O1
            288 => '&#xE312;', //$O2
            289 => '&#xE313;', //$O3
            290 => '&#xE314;', //$O4
            291 => '&#xE315;', //$O5
            292 => '&#xE316;', //$O6
            293 => '&#xE317;', //$O7
            294 => '&#xE318;', //$O8
            295 => '&#xE319;', //$O9
            296 => '&#xE31A;', //$O:
            297 => '&#xE31B;', //$O;
            298 => '&#xE31C;', //$O<
            299 => '&#xE31D;', //$O=
            300 => '&#xE31E;', //$O>
            301 => '&#xE31F;', //$O?
            302 => '&#xE320;', //$O@
            303 => '&#xE321;', //$OA
            304 => '&#xE322;', //$OB
            305 => '&#xE323;', //$OC
            306 => '&#xE324;', //$OD
            307 => '&#xE325;', //$OE
            308 => '&#xE326;', //$OF
            309 => '&#xE327;', //$OG
            310 => '&#xE328;', //$OH
            311 => '&#xE329;', //$OI
            312 => '&#xE32A;', //$OJ
            313 => '&#xE32B;', //$OK
            314 => '&#xE32C;', //$OL
            315 => '&#xE32D;', //$OM
            316 => '&#xE32E;', //$ON
            317 => '&#xE32F;', //$OO
            318 => '&#xE330;', //$OP
            319 => '&#xE331;', //$OQ
            320 => '&#xE332;', //$OR
            321 => '&#xE333;', //$OS
            322 => '&#xE334;', //$OT
            323 => '&#xE335;', //$OU
            324 => '&#xE336;', //$OV
            325 => '&#xE337;', //$OW
            326 => '&#xE338;', //$OX
            327 => '&#xE339;', //$OY
            328 => '&#xE33A;', //$OZ
            329 => '&#xE33B;', //$O[
            330 => '&#xE33C;', //$O\
            331 => '&#xE33D;', //$O]
            332 => '&#xE33E;', //$O^
            333 => '&#xE33F;', //$O_
            334 => '&#xE340;', //$O`
            335 => '&#xE341;', //$Oa
            336 => '&#xE342;', //$Ob
            337 => '&#xE343;', //$Oc
            338 => '&#xE344;', //$Od
            339 => '&#xE345;', //$Oe
            340 => '&#xE346;', //$Of
            341 => '&#xE347;', //$Og
            342 => '&#xE348;', //$Oh
            343 => '&#xE349;', //$Oi
            344 => '&#xE34A;', //$Oj
            345 => '&#xE34B;', //$Ok
            346 => '&#xE34C;', //$Ol
            347 => '&#xE34D;', //$Om
            348 => '&#xE401;', //$P!
            349 => '&#xE402;', //$P"
            350 => '&#xE403;', //$P#
            351 => '&#xE404;', //$P$
            352 => '&#xE405;', //$P%
            353 => '&#xE406;', //$P&
            354 => '&#xE407;', //$P'
            355 => '&#xE408;', //$P(
            356 => '&#xE409;', //$P)
            357 => '&#xE40A;', //$P*
            358 => '&#xE40B;', //$P+
            359 => '&#xE40C;', //$P,
            360 => '&#xE40D;', //$P-
            361 => '&#xE40E;', //$P.
            362 => '&#xE40F;', //$P/
            363 => '&#xE410;', //$P0
            364 => '&#xE411;', //$P1
            365 => '&#xE412;', //$P2
            366 => '&#xE413;', //$P3
            367 => '&#xE414;', //$P4
            368 => '&#xE415;', //$P5
            369 => '&#xE416;', //$P6
            370 => '&#xE417;', //$P7
            371 => '&#xE418;', //$P8
            372 => '&#xE419;', //$P9
            373 => '&#xE41A;', //$P:
            374 => '&#xE41B;', //$P;
            375 => '&#xE41C;', //$P<
            376 => '&#xE41D;', //$P=
            377 => '&#xE41E;', //$P>
            378 => '&#xE41F;', //$P?
            379 => '&#xE420;', //$P@
            380 => '&#xE421;', //$PA
            381 => '&#xE422;', //$PB
            382 => '&#xE423;', //$PC
            383 => '&#xE424;', //$PD
            384 => '&#xE425;', //$PE
            385 => '&#xE426;', //$PF
            386 => '&#xE427;', //$PG
            387 => '&#xE428;', //$PH
            388 => '&#xE429;', //$PI
            389 => '&#xE42A;', //$PJ
            390 => '&#xE42B;', //$PK
            391 => '&#xE42C;', //$PL
            392 => '&#xE42D;', //$PM
            393 => '&#xE42E;', //$PN
            394 => '&#xE42F;', //$PO
            395 => '&#xE430;', //$PP
            396 => '&#xE431;', //$PQ
            397 => '&#xE432;', //$PR
            398 => '&#xE433;', //$PS
            399 => '&#xE434;', //$PT
            400 => '&#xE435;', //$PU
            401 => '&#xE436;', //$PV
            402 => '&#xE437;', //$PW
            403 => '&#xE438;', //$PX
            404 => '&#xE439;', //$PY
            405 => '&#xE43A;', //$PZ
            406 => '&#xE43B;', //$P[
            407 => '&#xE43C;', //$P\
            408 => '&#xE43D;', //$P]
            409 => '&#xE43E;', //$P^
            410 => '&#xE43F;', //$P_
            411 => '&#xE440;', //$P`
            412 => '&#xE441;', //$Pa
            413 => '&#xE442;', //$Pb
            414 => '&#xE443;', //$Pc
            415 => '&#xE444;', //$Pd
            416 => '&#xE445;', //$Pe
            417 => '&#xE446;', //$Pf
            418 => '&#xE447;', //$Pg
            419 => '&#xE448;', //$Ph
            420 => '&#xE449;', //$Pi
            421 => '&#xE44A;', //$Pj
            422 => '&#xE44B;', //$Pk
            423 => '&#xE44C;', //$Pl
            424 => '&#xE501;', //$Q!
            425 => '&#xE502;', //$Q"
            426 => '&#xE503;', //$Q#
            427 => '&#xE504;', //$Q$
            428 => '&#xE505;', //$Q%
            429 => '&#xE506;', //$Q&
            430 => '&#xE507;', //$Q'
            431 => '&#xE508;', //$Q(
            432 => '&#xE509;', //$Q)
            433 => '&#xE50A;', //$Q*
            434 => '&#xE50B;', //$Q+
            435 => '&#xE50C;', //$Q,
            436 => '&#xE50D;', //$Q-
            437 => '&#xE50E;', //$Q.
            438 => '&#xE50F;', //$Q/
            439 => '&#xE510;', //$Q0
            440 => '&#xE511;', //$Q1
            441 => '&#xE512;', //$Q2
            442 => '&#xE513;', //$Q3
            443 => '&#xE514;', //$Q4
            444 => '&#xE515;', //$Q5
            445 => '&#xE516;', //$Q6
            446 => '&#xE517;', //$Q7
            447 => '&#xE518;', //$Q8
            448 => '&#xE519;', //$Q9
            449 => '&#xE51A;', //$Q:
            450 => '&#xE51B;', //$Q;
            451 => '&#xE51C;', //$Q<
            452 => '&#xE51D;', //$Q=
            453 => '&#xE51E;', //$Q>
            454 => '&#xE51F;', //$Q?
            455 => '&#xE520;', //$Q@
            456 => '&#xE521;', //$QA
            457 => '&#xE522;', //$QB
            458 => '&#xE523;', //$QC
            459 => '&#xE524;', //$QD
            460 => '&#xE525;', //$QE
            461 => '&#xE526;', //$QF
            462 => '&#xE527;', //$QG
            463 => '&#xE528;', //$QH
            464 => '&#xE529;', //$QI
            465 => '&#xE52A;', //$QJ
            466 => '&#xE52B;', //$QK
            467 => '&#xE52C;', //$QL
            468 => '&#xE52D;', //$QM
            469 => '&#xE52E;', //$QN
            470 => '&#xE52F;', //$QO
            471 => '&#xE530;', //$QP
            472 => '&#xE531;', //$QQ
            473 => '&#xE532;', //$QR
            474 => '&#xE533;', //$QS
            475 => '&#xE534;', //$QT
            476 => '&#xE535;', //$QU
            477 => '&#xE536;', //$QV
            478 => '&#xE537;', //$QW
            479 => '&#xE538;', //$QX
            480 => '&#xE539;', //$QY
            481 => '&#xE53A;', //$QZ
            482 => '&#xE53B;', //$Q[
            483 => '&#xE53C;', //$Q\
            484 => '&#xE53D;', //$Q]
            485 => '&#xE53E;' //$Q^
        );
    }

    static function &getInstance()
    {
        static $singleton;
        if (empty($singleton)) {
            $singleton = new MyLib_OpenPNE_KtaiEmoji_Softbank();
        }
        return $singleton;
    }
}

?>