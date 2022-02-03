
from PIL import Image 
import glob
import random
import os

img_path = 'C:\\xampp\\htdocs\\img\\Dhoni1.jpg'

img = Image.open(img_path)
print('{}'.format(img.format))
print('{}'.format(img.size))
print('image mode: {}'.format(img.mode))

#Creating a list of needed images
image_list = []
resized_image_list = []
for filename in glob.glob('C:\\xampp\\htdocs\\img\\*.jpg'):
    img = Image.open(filename)
    image_list.append(img)
    
#Resizing & Shuffling images
for i in image_list:
    image = i.resize((1400,450))
    resized_image_list.append(image)
random.shuffle(resized_image_list)
IMG = resized_image_list[0]
IMG.show()

                                                    #Save resized images to a folder
for (i,new) in enumerate(resized_image_list):
    new.save('{}{}{}'.format('C:\\xampp\\htdocs\\resized_images\\carousel\\_',i+1,'.jpg'))
    # <path> <iterator> <file format>
    
                                                        #Clearing a folder
curr_dir = 'C:\\xampp\\htdocs\\resized_images\\'
os.chdir(curr_dir)
img = glob.glob('*')
for i in img:
    os.unlink(i)
    
                                                    #Resize images and Manually Crop them
img = Image.open('C:\\xampp\\htdocs\\img\\Dhoni1.jpg')
area =(200,375,1700,1000)
dhoni = img.crop(area)
#dhoni.show()
dhoni.save('C:\\xampp\\htdocs\\resized_images\\dhoni_cropped.jpg')

                                                    #Batsmen Cards
img = Image.open('C:\\xampp\\htdocs\\img\\batsmen\\Raina.jpg')
area =(350,0,850,360)
batsman = img.crop(area)
#dhoni.show()
batsman.save('C:\\xampp\\htdocs\\resized_images\\batsmen\\Raina_cropped.jpg')

                                                    #Bowler Cards
img = Image.open('C:\\xampp\\htdocs\\img\\bowlers\\Narine.jpg')
area =(125,0,725,350)
bowler = img.crop(area)
#bowler.show()
bowler.save('C:\\xampp\\htdocs\\resized_images\\bowlers\\3.jpg')

                                                    #All-rounder Cards
img = Image.open('C:\\xampp\\htdocs\\img\\all_rounders\\Russel.jpg')
area =(0,30,700,450)
allrounder = img.crop(area)
#allrounder.show()
allrounder.save('C:\\xampp\\htdocs\\resized_images\\all_rounders\\3.jpg')

                                                 #Best Catches Cards
curr_dir = 'C:\\xampp\\htdocs\\resized_images\\catches\\'
os.chdir(curr_dir)
img = glob.glob('*')
for i in img:
    os.unlink(i)

img = Image.open('C:\\xampp\\htdocs\\img\\catches\\Raina.jpg')
area =(250,110,1060,560)
catch = img.crop(area)
#dhoni.show()
catch.save('C:\\xampp\\htdocs\\resized_images\\catches\\Raina_cropped.jpg')

                                                    #ELClasico Cards
img = Image.open('C:\\xampp\\htdocs\\img\\ELClasico\\Rohit_Dhoni.jpg')
area =(0,0,1260,690)
catch = img.crop(area)
#dhoni.show()
catch.save('C:\\xampp\\htdocs\\resized_images\\ElCLasico\\Rohit_Dhoni_cropped.jpg')

                                                    #Archival Cards
img = Image.open('C:\\xampp\\htdocs\\img\\archives\\KKR_2014.jpg')
area =(0,20,950,555)
archives = img.crop(area)
#dhoni.show()
archives.save('C:\\xampp\\htdocs\\resized_images\\archives\\KKR_2014_resized.jpg')
