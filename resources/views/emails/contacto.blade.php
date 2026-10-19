<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background-color: #0f172a; color: #e2e8f0; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background-color: #1e293b; border-radius: 16px; border: 1px solid #334155; padding: 32px; }
        .header { border-bottom: 2px solid #2563eb; padding-bottom: 16px; margin-bottom: 24px; }
        .title { font-size: 20px; font-weight: 800; color: #ffffff; margin: 0; text-transform: uppercase; }
        .badge { display: inline-block; background-color: #1d4ed8; color: #ffffff; font-size: 11px; font-weight: bold; padding: 4px 8px; border-radius: 6px; margin-top: 8px; text-transform: uppercase; }
        .field { margin-bottom: 16px; }
        .label { font-size: 11px; font-weight: bold; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.05em; display: block; margin-bottom: 4px; }
        .value { font-size: 15px; color: #f8fafc; background-color: #0f172a; padding: 12px; border-radius: 8px; border: 1px solid #334155; }
        .footer { margin-top: 32px; border-top: 1px solid #334155; pt: 16px; text-align: center; font-size: 12px; color: #64748b; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2 class="title">AGC GROUP MÉXICO</h2>
            <span class="badge">Nueva Solicitud desde el Sitio Web</span>
        </div>

        <div class="field">
            <span class="label">Nombre del Contacto</span>
            <div class="value">{{ $datos['nombre'] }}</div>
        </div>

        <div class="field">
            <span class="label">Empresa</span>
            <div class="value">{{ $datos['empresa'] ?? 'No especificada' }}</div>
        </div>

        <div class="field">
            <span class="label">Correo Electrónico</span>
            <div class="value">{{ $datos['email'] }}</div>
        </div>

        <div class="field">
            <span class="label">Teléfono de Contacto</span>
            <div class="value">{{ $datos['telefono'] ?? 'No proporcionado' }}</div>
        </div>

        <div class="field">
            <span class="label">Detalles del Proyecto / Mensaje</span>
            <div class="value" style="white-space: pre-line;">{{ $datos['mensaje'] }}</div>
        </div>

        <div class="footer">
            Este mensaje fue enviado automáticamente desde el formulario de la vista de contacto de agcmexico.com.mx
        </div>
    </div>
</body>
</html>
