<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Enquiry – Floorshine</title>
</head>
<body style="margin:0; padding:0; background-color:#f0f4f8; font-family: 'Segoe UI', Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f0f4f8; padding: 40px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px; width:100%;">

                    {{-- HEADER --}}
                    <tr>
                        <td style="
                            background: linear-gradient(135deg, #35adb5 0%, #2a9aa2 100%);
                            border-radius: 16px 16px 0 0;
                            padding: 36px 40px;
                            text-align: center;
                        ">
                            <div style="font-size:28px; font-weight:800; color:#fff; margin-bottom:8px;">
                                Floor<span style="opacity:0.75;">shine</span>
                            </div>
                            <div style="
                                display:inline-block; background:rgba(255,255,255,0.2);
                                border-radius:100px; padding:4px 16px;
                                font-size:12px; color:#fff; font-weight:600;
                                letter-spacing:1px; text-transform:uppercase; margin-bottom:20px;
                            ">Singapore Professional Floor Polishing</div>

                            <div style="
                                width:56px; height:56px; background:rgba(255,255,255,0.2);
                                border-radius:50%; margin:0 auto 14px;
                                line-height:56px; text-align:center;
                                font-size:26px; color:#fff;
                            ">✉</div>
                            <h1 style="color:#fff; font-size:22px; font-weight:700; margin:0 0 8px;">New Enquiry Received</h1>
                            <p style="color:rgba(255,255,255,0.85); font-size:14px; margin:0;">
                                Someone has sent a message through the Floorshine website.
                            </p>
                        </td>
                    </tr>

                    {{-- BODY --}}
                    <tr>
                        <td style="background:#fff; padding:36px 40px;">

                            <p style="color:#444; font-size:15px; line-height:1.6; margin:0 0 28px;">
                                Hello Floorshine Team,<br><br>
                                You have received a new enquiry message. Please review the details below and respond promptly.
                            </p>

                            {{-- Section: Sender Info --}}
                            <div style="
                                font-size:11px; font-weight:700; letter-spacing:1.5px;
                                text-transform:uppercase; color:#35adb5;
                                margin-bottom:16px; padding-bottom:8px;
                                border-bottom:2px solid #e8f7f8;
                            ">Sender Information</div>

                            {{-- Subject --}}
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:12px;">
                                <tr>
                                    <td style="
                                        background:#fff8e1; border-left:4px solid #efb700;
                                        border-radius:0 8px 8px 0; padding:14px 18px;
                                    ">
                                        <div style="font-size:11px; font-weight:600; color:#b38600; text-transform:uppercase; letter-spacing:0.8px; margin-bottom:4px;">Subject</div>
                                        <div style="font-size:15px; font-weight:700; color:#1a1a2e;">{{ $data['subject'] }}</div>
                                    </td>
                                </tr>
                            </table>

                            {{-- Name --}}
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:12px;">
                                <tr>
                                    <td style="
                                        background:#f0fbfc; border-left:4px solid #35adb5;
                                        border-radius:0 8px 8px 0; padding:14px 18px;
                                    ">
                                        <div style="font-size:11px; font-weight:600; color:#35adb5; text-transform:uppercase; letter-spacing:0.8px; margin-bottom:4px;">Name</div>
                                        <div style="font-size:15px; font-weight:600; color:#1a1a2e;">{{ $data['name'] }}</div>
                                    </td>
                                </tr>
                            </table>

                            {{-- Email --}}
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:12px;">
                                <tr>
                                    <td style="
                                        background:#f0fbfc; border-left:4px solid #35adb5;
                                        border-radius:0 8px 8px 0; padding:14px 18px;
                                    ">
                                        <div style="font-size:11px; font-weight:600; color:#35adb5; text-transform:uppercase; letter-spacing:0.8px; margin-bottom:4px;">Email</div>
                                        <div style="font-size:15px; font-weight:600; color:#1a1a2e;">
                                            <a href="mailto:{{ $data['email'] }}" style="color:#35adb5; text-decoration:none;">{{ $data['email'] }}</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            {{-- Mobile --}}
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:24px;">
                                <tr>
                                    <td style="
                                        background:#f0fbfc; border-left:4px solid #35adb5;
                                        border-radius:0 8px 8px 0; padding:14px 18px;
                                    ">
                                        <div style="font-size:11px; font-weight:600; color:#35adb5; text-transform:uppercase; letter-spacing:0.8px; margin-bottom:4px;">Mobile</div>
                                        <div style="font-size:15px; font-weight:600; color:#1a1a2e;">{{ $data['mobile'] ?? '-' }}</div>
                                    </td>
                                </tr>
                            </table>

                            {{-- Section: Message --}}
                            <div style="
                                font-size:11px; font-weight:700; letter-spacing:1.5px;
                                text-transform:uppercase; color:#35adb5;
                                margin-bottom:16px; padding-bottom:8px;
                                border-bottom:2px solid #e8f7f8;
                            ">Message</div>

                            {{-- Question --}}
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:32px;">
                                <tr>
                                    <td style="
                                        background:#f8f8f8; border-left:4px solid #aaa;
                                        border-radius:0 8px 8px 0; padding:16px 18px;
                                    ">
                                        <div style="font-size:15px; color:#333; line-height:1.7;">{{ $data['question'] }}</div>
                                    </td>
                                </tr>
                            </table>

                            {{-- CTA --}}
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center">
                                        <a href="mailto:{{ $data['email'] }}" style="
                                            display:inline-block; background:#35adb5; color:#fff;
                                            text-decoration:none; padding:13px 28px;
                                            border-radius:8px; font-size:14px; font-weight:700;
                                            margin-right:10px;
                                        ">✉️ Reply via Email</a>
                                        <a href="https://wa.me/6588112999" style="
                                            display:inline-block; background:#25D366; color:#fff;
                                            text-decoration:none; padding:13px 28px;
                                            border-radius:8px; font-size:14px; font-weight:700;
                                        ">💬 Reply via WhatsApp</a>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    {{-- FOOTER --}}
                    <tr>
                        <td style="
                            background:#1a1a2e; border-radius:0 0 16px 16px;
                            padding:28px 40px; text-align:center;
                        ">
                            <div style="font-size:16px; font-weight:800; color:#fff; margin-bottom:6px;">
                                Floor<span style="color:#35adb5;">shine</span>
                            </div>
                            <div style="font-size:12px; color:rgba(255,255,255,0.5); margin-bottom:16px;">
                                Singapore Professional Floor Polishing
                            </div>
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
                                <tr>
                                    <td align="center" style="padding:4px 0;">
                                        <span style="font-size:12px; color:rgba(255,255,255,0.6);">📍 18 Sin Ming Lane, #06-27, Midview City, Singapore 573960</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding:4px 0;">
                                        <span style="font-size:12px; color:rgba(255,255,255,0.6);">📞 +65 8811 2999 &nbsp;|&nbsp; ✉️ enquiry@floorpolishing.sg</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding:4px 0;">
                                        <span style="font-size:12px; color:rgba(255,255,255,0.6);">🕐 Mon – Sat: 9:00 am – 6:00 pm</span>
                                    </td>
                                </tr>
                            </table>
                            <div style="font-size:11px; color:rgba(255,255,255,0.3); border-top:1px solid rgba(255,255,255,0.08); padding-top:14px;">
                                © {{ date('Y') }} Floorshine. All rights reserved. &nbsp;|&nbsp;
                                <a href="https://www.floorpolishing.sg" style="color:#35adb5; text-decoration:none;">floorpolishing.sg</a>
                            </div>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
