FROM ubuntu:18.10

RUN apt update
RUN apt install locales
RUN locale-gen en_US.UTF-8
ENV LANG en_US.UTF-8
ENV LANGUAGE en_US:en
ENV LC_ALL en_US.UTF-8
ENV DEBIAN_FRONTEND noninteractive

RUN apt install python socat -y
RUN printf "Foresty2019{5a399860ecef529b27d390a1241dc688}" > flag.txt
COPY src .

RUN chmod 755 chall.py
RUN chmod 700 /usr/bin/* /bin/* /tmp /dev/shm
RUN chmod 755 /bin/dash /bin/sh /bin/cat /usr/bin/id /bin/ls /usr/bin/socat /usr/bin/python

EXPOSE 3000

CMD socat TCP-LISTEN:3000,reuseaddr,fork EXEC:"python chall.py",su=nobody,stderr
