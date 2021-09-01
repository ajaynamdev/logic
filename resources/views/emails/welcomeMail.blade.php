<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <style>
        table, td, div, h1, p {font-family: 'Roboto', sans-serif!important;}
    </style>
</head>
<body style="margin:0;padding:0;">
    <table role="presentation" style="width:100%; border-collapse:collapse;border:0;border-spacing:0;background: #f9f9f9; height: 100vh;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation" style="width:607px;border-collapse:collapse;border-spacing:0; background:  #ffffff;text-align:left; margin-top: 30px; border: 1px solid #ddd; border-top: 0;">
                        <tr>
                        <td style="margin-top: 30px; padding: 3px 0; background: #343956;" colspan="2">
                            <table role="presentation" style="width: 69%;margin: auto;border-collapse:collapse;border:0;border-spacing:0;">
                                <tr>
                                    
                                    </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100%;" align="center">
                            
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0; margin-top: 30px;">
                                <tr>
                                    <td style="padding:0; text-align: center;">
                                        <img src="{{ asset('image/logo.png') }}" alt="" width="50" style="height:auto;display:inline-block; position: relative;" /> 
                                                                
                                    </td>
                                                            
                                    
                                    </tr>
                            </table>
                           
                           
                                                                
                        </td>
                                                            
                        
                    </tr>
                    <tr>
                        <td style="margin-top: 30px; padding: 20px 0;" colspan="2">
                            <table role="presentation" style="width: 100%;margin: auto;border-collapse:collapse;border:0;border-spacing:0; text-align: center;">
                                <tr>
                                    <td style="width: 100%;">
                                       <span style="color: #555555; font-size: 30px; font-weight: 700;">Welcome to {{ $data['products']['product']['product_name'] }}</span>  
                                                                
                                    </td>
                                                            
                                    
                                    </tr>
                                  
                                   
                            </table>
                        </td>
                    </tr>

                    
                    <tr>
                        <td style="padding:36px 40px 36px 26px; width: 100%;" colspan="2">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                
                                <tr>
                                    <td>
                                       <p style="margin-bottom: 0; color: #666; font-size: 16px; font-weight: 500;">Hello {{ $data['name'] }} !</p> 
                                    </td>
                                    
                                </tr>
                                <tr style="padding-top: 20px;">
                                    <td>
                                       <p style="margin-bottom: 0; color: #666;line-height: 23px;font-size: 16px; font-weight: 500;">Thank You for signing up for "product". We're really happy to have you! Click the link below to login to your account.</p> 
                                    </td>
                                    
                                </tr>

                                <tr style="padding-top: 20px; text-align: center;">
                                    <td>
                                       <a href="{{ url('login') }}" style="color:#ffffff; background:#4065f3; border-radius: 3px; text-align: center; font-size: 15px;font-weight: 500;padding: 15px 28px; text-decoration: none; margin-top: 30px; display: inline-block;">Login to your account</a>
                                    </td>
                                    
                                </tr>


                                
                               
                            </table>
                        </td>

                    </tr>
                    

                    <tr>
                        <td style="padding:36px 40px 36px 26px; width: 100%;" colspan="2">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                
                                <tr>
                                    <td>
                                       <p style="margin-bottom: 0; color: #666; font-size: 14px; font-weight: 500;">Best regards,</p> 
                                    </td>
                                    
                                </tr>
                                <tr style="padding-top: 20px;">
                                    <td>
                                       <p style="margin-bottom: 0; color: #666;line-height: 23px;font-size: 14px; font-weight: 500;">Company Name</p> 
                                    </td>
                                    
                                </tr>

                                <tr style="padding-top: 1px;">
                                    <td>
                                       <p style="margin-bottom: 0; color: #666;font-size: 14px; font-weight: 500; margin-top: 0;">Elerion ltd., CEO and Founder</p> 
                                    </td>
                                    
                                </tr>
                                <tr style="padding-top: 1px;">
                                    <td>
                                       <a href="{{ url('downloadPdf/'.$data['id'].'/'.$data['pdf']['token'].' ') }}" style="margin-bottom: 0; text-decoration: underline; color: blue;font-size: 14px; font-weight: 500;">For Download Pdf file click here</a> 
                                    </td>
                                    
                                </tr>


                                
                               
                            </table>
                        </td>

                    </tr>

                   
                   
                </table>
            </td>
        </tr>

        <tr>
            <td align="center" style="padding:0;">
                <table style="width:100%;text-align:center; margin-top: 12px;margin-bottom: 50px;">
                    <tr>
                        <td colspan="2">
                            <p style="color: #666;font-size: 13px; font-weight: 500; margin-top: 0; margin-bottom: 0;">Some Firm Ltd, 35 Avenue. City 10115, USA</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p style="color: #666;font-size: 13px; font-weight: 500; margin-top: 0;">
                                <a href="#" style="text-decoration: underline;color: #666;">Unsubscribe</a>
                                from our emails
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>

