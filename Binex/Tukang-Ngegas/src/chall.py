import re, os, sys, random, time

sys.stdout = os.fdopen(sys.stdout.fileno(), 'w', 0)

def echo(x, y=1):
    print '[*] {}'.format(x) if y else '[!] {}'.format(x)

echo('Connecting to server..', 0) # tapi bo'ong hiyahiyahiya
time.sleep( random.randint(1<<1, 1<<2) )

echo('Switching to interactive mode')
while 0xdeadc0de: 
    _ = raw_input('$ ')
    
    if 'help' in _.lower():
        print 'Nothing, waktu dan tempat dipersilahkan untuk ngegas" gann !!'
        continue

    os.system(_.upper())
