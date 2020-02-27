# Objects
The class is the blueprint of the object.

### QA
1. `覺得 return new static();`
> * 等同於 `return new self()` 
> * static declared method - > are callable without an instance of the object created . $this is not accessible there
> * 要建立實例必須有靜態參考
> * 此方法可避免重複建立相同類別的物件
2. `...$params` Spread Operator
> * An array pair prefixed by … will be expanded in places. Only arrays and objects who implement Traversable can be expanded.
3. `Team::` scope resolution operator(::)
4. 靜態類別不一定要 return 靜態物件


# Fib_recursive
Static 屬性, 範例
* static 主要用途在於定義一個變數空間，讓函式或類別可以保留住該變數的值，直到下次的存取。所以不論我們產生多少同類別的物件，它們都會存取到同一個 static 類別屬性。