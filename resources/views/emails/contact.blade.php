<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: 'Courier New', Courier, monospace; background-color: #0b1120; color: #94a3b8; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background-color: #1e293b; border: 1px solid #334155; border-radius: 8px; overflow: hidden; }
        .header { background-color: #0f172a; padding: 20px; border-bottom: 2px solid #3b82f6; }
        .header h2 { color: #f8fafc; margin: 0; font-size: 18px; text-transform: uppercase; letter-spacing: 2px; }
        .status-bar { background-color: #1e293b; padding: 10px 20px; font-size: 11px; border-bottom: 1px solid #334155; }
        .status-active { color: #22c55e; }
        .content { padding: 30px; }
        .field { margin-bottom: 20px; }
        .label { font-size: 10px; color: #3b82f6; text-transform: uppercase; letter-spacing: 1px; font-weight: bold; margin-bottom: 5px; }
        .value { color: #f1f5f9; font-size: 15px; }
        .message-box { background-color: rgba(15, 23, 42, 0.5); border: 1px solid #334155; padding: 15px; border-radius: 4px; color: #cbd5e1; line-height: 1.6; }
        .footer { padding: 20px; text-align: center; font-size: 10px; color: #64748b; border-top: 1px solid #334155; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>[SYSTEM_LOG] New Inquiry</h2>
        </div>

        <div class="status-bar">
            NODE: <span class="status-active">PNH-SOUTH-1</span> &nbsp; | &nbsp;
            PROTOCOL: <span class="status-active">INBOUND_INQUIRY</span> &nbsp; | &nbsp;
            ENCRYPTION: <span class="status-active">TLS_1.3</span>
        </div>

        <div class="content">
            <div class="field">
                <div class="label">Primary Contact</div>
                <div class="value">{{ $data['name'] }}</div>
            </div>

            <div class="field">
                <div class="label">Secure Route (Email)</div>
                <div class="value" style="color: #3b82f6;">{{ $data['email'] }}</div>
            </div>

            <div class="field">
                <div class="label">Organization / Cluster</div>
                <div class="value">{{ $data['company'] ?? 'INTERNAL_OR_UNDEFINED' }}</div>
            </div>

            <hr style="border: 0; border-top: 1px solid #334155; margin: 25px 0;">

            <div class="field">
                <div class="label">Payload (Message Content)</div>
                <div class="message-box">
                    {{ $data['message'] }}
                </div>
            </div>
        </div>

        <div class="footer">
            &copy; {{ date('Y') }} ANGKORNOVA_SYSTEMS // OPS_CENTER_NOTIF
        </div>
    </div>
</body>
</html>
