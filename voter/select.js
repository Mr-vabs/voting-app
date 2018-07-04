function checkbox(a) {

var Count = 0;

if (a.checked)
{
Count = Count + 1;

}

if (Count == 2)
{
alert('choose One Please');
    return false;
}
}