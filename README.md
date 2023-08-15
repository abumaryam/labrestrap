# Labrestrap
Laravel with Laravel Breeze and Twitter Bootstrap

## notes

In `node_modules\bootstrap\scss\mixins\_grid.scss` edit  line 59 from: 
```
    width: divide(100%, $count);
```
to:
```
    width: divide(100, $count);
```