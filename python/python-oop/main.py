import csv

class Item:
    # class attribute
    pay_rate = .8 # the pay rate after 20% discount

    all = []

    def __init__(self, name: str, price: float, quantity=0):
        # run validation to received arguments
        assert price >= 0, f"Price {price} is not greater than or equal to zero"
        assert quantity >= 0, f"Quantity {quantity} is not greater than or equal to zero"

        # assign to self object
        self.name = name
        self.price = price
        self.quantity = quantity

        # actions to execute
        Item.all.append(self)

    def apply_default_discount(self):
        self.price *= Item.pay_rate
    
    def apply_exclusive_discount(self):
        self.price *= self.pay_rate

    def calculate_total_price(self):
        return self.price * self.quantity
    
    @classmethod # decorator
    def instantiate_from_csv(cls): # class method adalah method yang menempel pada class
        with open('items.csv', 'r') as f:
            reader = csv.DictReader(f)
            items = list(reader)

        for item in items:
            Item(
                name=item.get('name'),
                price=int(item.get('price')),
                quantity=int(item.get('quantity')),
            )

    @staticmethod # decorator
    def check_integer(num): # static method adalah method yang menempel pada class ataupun objek
        if isinstance(num, float):
            return num.is_integer()
        elif isinstance(num, int):
            return True
        else:
            return False
    
    def __repr__(self):
        return f"Item({self.name}, {self.price}, {self.quantity})"

Item.instantiate_from_csv()
print(Item.all)

print(Item.is_integer(7))