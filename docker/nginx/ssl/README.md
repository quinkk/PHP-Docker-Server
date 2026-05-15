Place your TLS cert and key here as `server.crt` and `server.key`.

- `server.crt`: PEM-encoded certificate (self-signed or from CA)
- `server.key`: PEM-encoded private key

A self-signed `localhost` pair is generated automatically if missing; replace with your real certs for production.

These are mounted read-only into the container at `/etc/nginx/ssl/`.
