import cv2
import numpy as np

im = cv2.imread("tempimg3.jpg")
im  = cv2.resize(im, (960, 540))
cv2.rectangle(im, (207, 25), (552, 102), (0, 255, 0), 3)
cv2.rectangle(im, (340, 145), (738, 236), (0, 255, 0), 3)
cv2.rectangle(im, (282, 312), (655, 383), (0, 255, 0), 3)
cv2.rectangle(im, (217, 435), (566, 503), (0, 255, 0), 3)
sapId = im[28:100, 210:550]
courseName = im[148:234, 343:736]
program = im[ 315:381, 285:653]
marks = im[438:501, 220:564]
cv2.imwrite("GVision/vendor/cimg/sapid.jpg", sapId)
cv2.imwrite("GVision/vendor/cimg/courseName.jpg", courseName)
cv2.imwrite("GVision/vendor/cimg/program.jpg", program)
cv2.imwrite("GVision/vendor/cimg/marks.jpg", marks)
print "success"
# cv2.imshow("Scanned form", im)
# cv2.waitKey()
