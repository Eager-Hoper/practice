<?
//ざっくり設計

public class Main{
public static void main(String[] args){
Navigator n = new Navigator();
Sailor s = new Sailor();
Manipulator m = new Manipulator(); 
}
}

public class Navigator{
double myLocation[] = [9.815, -9.806, 4.293]
public void getMyLocation(){
}
public void getTargetsLocation(){
}
public void seeKOZ(){
}
public void calcClosestTarget(){
}
public void informWay(){
}
}

public class Manipulator(){
public void receiveWay(){
}
public void getPosture(){
}
public void calcManipulation(){
}
public void manipulate(){
}
)

public class Sniper{
public void getImage(){
}
public void calcError(){
//位置に誤差があればSailorに報告して動かしてもらう
//誤差がなくなったら照射に入る
}
public void laser(){
}
public void readQR(){
}
public void goalMassage(){
}
}
?>
