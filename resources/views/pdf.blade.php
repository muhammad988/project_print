<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
    <style>
        @page { margin: 0px; }
        body { margin: 0px; }
        .page-break {
            page-break-after: always;
        }

    </style>
</head>
<body class="first-page">

@for($key=1; $key<=$count;  $key++)

    <div style="width: 100% ;height: 13.2cm ;padding-top: 0.5cm;">
        <table style="float: left;" width="7cm" >
            <thead>
            <tr>
                <th style="padding-right: 70px; font-size: 20px "> D {{$key+$num}}</th>
            </tr>
            <tr>
                <th height="2cm"  style=" border-bottom: 2px dotted ;border-right: 2px dotted "> </th>
                <th height="2cm"  style="border-bottom: 2px dotted ;border-right: 1px dotted "></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td height="9cm" style=" border-right: 2px dotted "></td>
                <td height="9cm" width="35%" style=" border-right: 1px dotted ;margin-left: 0.5cm"></td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th height="1.5cm"  style="padding-right: 70px;border-right: 2px dotted ; font-size: 20px ">D {{$key+$num}}</th>
                <th height="1.5cm" style="border-right: 1px dotted "></th>

            </tr>
            </tfoot>
        </table>
        <table style="float: left;"  width="7cm">
            <thead>
            <tr>
                <th style="padding-right: 30px;font-size: 20px "> D {{$key+$num}}</th>
            </tr>
            <tr>
                <th height="2cm" style=" border-bottom: 2px dotted ;border-right: 2px dotted "> </th>
                <th height="2cm" width="35%" style="border-bottom: 2px dotted ;border-right: 1px dotted "></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td height="9cm"  style=" border-right: 2px dotted "></td>
                <td height="9cm"   style=" border-right: 1px dotted "></td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th height="1.5cm"  style="padding-right: 30px; border-right: 2px dotted ;font-size: 20px ">D {{$key+$num}}</th>
                <th height="1.5cm"  style="border-right: 1px dotted "></th>

            </tr>
            </tfoot>
        </table>
        <table style="float: left;" width="7cm">
            <thead>
            <tr>
                <th style="padding-left: 20px;font-size: 20px "> D {{$key+$num}}</th>
            </tr>
            <tr>
                <th height="2cm"  style=" border-bottom: 2px dotted ;border-right: 2px dotted "> </th>
                <th height="2cm" width="35%" style="border-bottom: 2px dotted ;"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td height="9cm" style=" border-right: 2px dotted "></td>
                <td height="9cm"></td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th height="1.5cm"  style="padding-left: 20px;border-right: 2px dotted ;font-size: 20px ">D {{$key+$num}}</th>
                <th height="1.5cm" ></th>

            </tr>
            </tfoot>
        </table>
    </div>
    <hr style="margin-top: 1cm;margin-bottom: 1cm;border-top: 0px dotted ;border-bottom: 0px dashed ;">
    <div style="width: 100% ;height: 12cm ;">
        <table style="float: left;" width="7cm" >
            <thead>
            <tr>
                <th style="padding-right: 70px; font-size: 20px "> D {{$key+$num}}</th>
            </tr>
            <tr>
                <th height="2cm"  style=" border-bottom: 2px dotted ;border-right: 2px dotted "> </th>
                <th height="2cm"  style="border-bottom: 2px dotted ;border-right: 1px dotted "></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td height="8cm" style=" border-right: 2px dotted "></td>
                <td height="8cm" width="35%" style=" border-right: 1px dotted ;margin-left: 0.5cm"></td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th height="1cm"  style="padding-right: 70px;border-right: 2px dotted ; font-size: 20px ">D {{$key+$num}}</th>
                <th height="1cm" style="border-right: 1px dotted "></th>

            </tr>
            </tfoot>
        </table>
        <table style="float: left;"  width="7cm">
            <thead>
            <tr>
                <th style="padding-right: 30px;font-size: 20px "> D {{$key+$num}}</th>
            </tr>
            <tr>
                <th height="2cm" style=" border-bottom: 2px dotted ;border-right: 2px dotted "> </th>
                <th height="2cm" width="35%" style="border-bottom: 2px dotted ;border-right: 1px dotted "></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td height="8cm"  style=" border-right: 2px dotted "></td>
                <td height="8cm"   style=" border-right: 1px dotted "></td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th height="1cm"  style="padding-right: 30px; border-right: 2px dotted ;font-size: 20px ">D {{$key+$num}}</th>
                <th height="1cm"  style="border-right: 1px dotted "></th>

            </tr>
            </tfoot>
        </table>
        <table style="float: left;" width="7cm">
            <thead>
            <tr>
                <th style="padding-left: 20px;font-size: 20px "> D {{$key+$num}}</th>
            </tr>
            <tr>
                <th height="2cm"  style=" border-bottom: 2px dotted ;border-right: 2px dotted "> </th>
                <th height="2cm" width="35%" style="border-bottom: 2px dotted ;"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td height="8cm" style=" border-right: 2px dotted "></td>
                <td height="8cm"></td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th height="1cm"  style="padding-left: 20px;border-right: 2px dotted ;font-size: 20px ">D {{$key+$num}}</th>
                <th height="1cm" ></th>

            </tr>
            </tfoot>
        </table>
    </div>

    @if($count != $key)
        <div class="page-break"></div>
    @endif
@endfor
</body>
</html>
