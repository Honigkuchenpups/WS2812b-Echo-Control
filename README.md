What do you need?
1. Raspberry Pi
2. WS2812b strip
3. Jumper cable(for the WS2812b)
4. Sudo permission

How to install the projekt?
1.  sudo apt-get update -y
2.  sudo apt-get upgrade -y
3.  sudo apt-get install python-pip
4.  sudo pip install requests
5.  sudo apt-get install build-essential python-dev git scons swig
6.  git clone https://github.com/jgarff/rpi_ws281x.git
7.  cd rpi_ws281x
8.  scons
9.  cd python
10. sudo python setup.py install
11. cd ../ && cd ../

Now paste the unzipped project in this folder.
that still needs the brightness permisions (sudo chmod 777 brightness)
