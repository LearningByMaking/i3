echo -n "Enter Computer Number and then press [ENTER]: "
read compID
remoteMacAddress=$(ssh lbym@130.157.70.115 Documents/Scripts/getMacAddressByMachineNumber.sh $compID)
nohup sensible-browser http://130.157.70.115/view.php?filename=Desktops/$remoteMacAddress.png &
sh dtach_remote.sh $compID
