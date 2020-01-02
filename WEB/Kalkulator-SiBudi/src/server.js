const http = require('http');
const url = require('url');

function handler(req, res) {
    let calculate = x => {
        return new Function('return ' + x)();
    }
    
    let q = url.parse(req.url).query, result = 0xcafebabe;
    if (q && q[0x00] == String.fromCharCode(0x00000071))
        result = calculate(q.substring(1<<1, q.length))
    
    res.end(result.toString())
}

const server = http.createServer(handler);
server.listen(3000);
