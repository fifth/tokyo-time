# tokyo-time
simple clock displaying time in timezone "Asia/Tokyo"

example site: http://fifth26.com/tokyo-time

## ask for time 
ask "tokyo-time.php" for time by GET method, with the para "timezone" you can change the timezone 

example: [path]/tokyo-time.php?timezone=Asia/Tokyo

return will be a string formatted by PHP function getdate()

REMEMBER to use the correct format of the timezone name

default timezone is "Asia/Tokyo"

## next to do (maybe)

enable timezone custom function in clock view page
