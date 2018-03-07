import cv2
import numpy as np
from matplotlib import pyplot as plt

# loading image
#img0 = cv2.imread('SanFrancisco.jpg',)
img0 = cv2.imread('tempimg.jpg',cv2.IMREAD_COLOR)
img0 = cv2.resize(img0, (940, 1490))
cv2.imwrite("resize.jpg",img0);

# converting to gray scale
gray = cv2.cvtColor(img0, cv2.COLOR_BGR2GRAY)
cannyed = cv2.Canny(gray,300,300)
# Read the image you want connected components of
# Threshold it so it becomes binary
ret, thresh = cv2.threshold(cannyed,0,255,cv2.THRESH_BINARY+cv2.THRESH_OTSU)
#cv2.imshow("gray image1", thresh)


im_gray = cv2.cvtColor(img0, cv2.COLOR_BGR2GRAY)
im_gray = cv2.GaussianBlur(im_gray, (5, 5), 0)
ret, im_th = cv2.threshold(
    im_gray, 150,255, cv2.THRESH_BINARY)
#cv2.imshow("gray image2", im_th)

# You need to choose 4 or 8 for connectivity type
connectivity = 4
# Perform the operation
output = cv2.connectedComponentsWithStats(im_th, connectivity, cv2.CV_32S)
# Get the results
# The first cell is the number of labels
num_labels = output[0]
# The second cell is the label matrix
labels = output[1]
# The third cell is the stat matrix
stats = output[2]
# The fourth cell is the centroid matrix
centroids = output[3]

#print num_labels
#print labels
#print stats
#print centroids

for stat in stats:
    if(((stat[3]*1.0)/1700)>(1.0/38) and (( stat[3]*1.0 )/1700)<(1.0/15) ):
        cv2.rectangle(img0,(stat[0],stat[1]),(stat[0]+stat[2],stat[1]+stat[3]),(0,255,0),1)
        sapId = im_gray[stat[1]:stat[1]+stat[3], stat[0]:stat[0]+stat[2]]
        cv2.imwrite("GVision/vendor/cimg/"+str(stat[0]+(stat[2]/2))+"_"+str(stat[1]+(stat[3]/2))+".jpg", sapId)

print "success"
#cv2.imshow("canny",img0)
cv2.waitKey(0)
cv2.destroyAllWindows()
