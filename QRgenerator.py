import qrcode

url = "https://play.google.com/store/apps/details?id=co.learnol.denlh"
img = qrcode.make(url)
img.save("playstore_qr.png")