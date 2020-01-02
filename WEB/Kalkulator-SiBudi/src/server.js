const http = require('http');

function handler(req, res) {
    let calculate = x => {
        return new Function('return ' + x)();
    }

    res.end( calculate(req.url.split('?q=')[1]).toString() )
}

const server = http.createServer(handler);
server.listen(3000);
