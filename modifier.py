import os

curr_dir = os.getcwd()
output_dir = os.path.join(curr_dir,"modified")
files = os.listdir(os.path.join(curr_dir,'html'))
openString = '''<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>'''

closingString = '''
</body>
</html>
'''
files.sort()

for file in files:
    with open(os.path.join(curr_dir,'html',file),'r') as fileHandle:
        
        try:
            print("Successful Handling File {}".format(file))

            data = fileHandle.read()

            finalString = openString + data + closingString

            newFile = open(os.path.join(curr_dir,'new_html',file),'w')

            newFile.write(finalString)

            newFile.close()
        except:
            print("Unsuccessful {}".format(file))
