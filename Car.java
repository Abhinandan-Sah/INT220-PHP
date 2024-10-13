public class Car {
    // Instance variables
    private String model;        // Initialized to null by default
    private int year;            // Initialized to 0 by default
    private double price;        // Initialized to 0.0 by default
    private boolean isElectric;  // Initialized to false by default

    // Constructor
    // public Car(String model, int year, double price, boolean isElectric) {
    //     this.model = model;
    //     this.year = year;
    //     this.price = price;
    //     this.isElectric = isElectric;
    // }
    public Car(){

    }

    // Instance method accessing instance variables
    public void displayInfo() {
        System.out.println("Model: " + model);
        System.out.println("Year: " + year);
        System.out.println("Price: $" + price);
        System.out.println("Electric: " + isElectric);
    }

    // Getter and setter methods
    public String getModel() {
        return model;
    }

    public void setModel(String model) {
        this.model = model;
    }

    // Other getters and setters...

    public static void main(String[] args) {
        // Car myCar = new Car("Tesla Model 3", 2023, 49990.0, true);
        Car myCar = new Car();
        myCar.displayInfo();
        // Accessing instance variable through getter
        // System.out.println("Model (via getter): " + myCar.getModel());

        // Modifying instance variable through setter
        // myCar.setModel("Tesla Model Y");
        // System.out.println("Updated Model: " + myCar.getModel());
    }
}