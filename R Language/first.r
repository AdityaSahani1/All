# # Pie Chart
# # Load necessary library
# # install.packages("ggplot2")  # Uncomment this line if ggplot2 is not already installed
# library(ggplot2)

# # Create data
# browser <- c("Chrome", "Firefox", "Edge", "Safari", "Others")
# market_share <- c(65.27, 10.23, 8.27, 7.01, 9.22)

# # Create a data frame
# data <- data.frame(browser, market_share)

# # Plot the pie chart
# ggplot(data, aes(x = "", y = market_share, fill = browser)) +
#   geom_bar(stat = "identity", width = 1) +
#   coord_polar("y", start = 0) +
#   theme_void() +
#   labs(title = "Web Browser Market Share", fill = "Browser")



# # Another
# # Load necessary library
# # install.packages("ggplot2")  # Uncomment this line if ggplot2 is not already installed
# library(ggplot2)

# # Manually input data
# fruit <- c("Apples", "Bananas", "Cherries", "Dates", "Elderberries")
# sales <- c(30, 20, 15, 10, 25)

# # Create a data frame
# data <- data.frame(fruit, sales)

# # Plot the pie chart
# ggplot(data, aes(x = "", y = sales, fill = fruit)) +
#   geom_bar(stat = "identity", width = 1) +
#   coord_polar("y", start = 0) +
#   theme_void() +
#   labs(title = "Fruit Sales Distribution", fill = "Fruit")



# Manually input data
fruit <- c("Apples", "Bananas", "Cherries", "Dates", "Elderberries")
sales <- c(30, 20, 15, 10, 25)

# Create a pie chart
pie(sales, labels = fruit, main = "Fruit Sales Distribution", col = rainbow(length(fruit)))

# another
# Manually input data
fruit <- c("Apples", "Bananas", "Cherries", "Dates", "Elderberries")
sales <- c(30, 20, 15, 10, 25)

# Calculate percentages
percentages <- round(100 * sales / sum(sales), 1)

# Create labels with percentages
labels <- paste(fruit, percentages, "%")

# Set colors for the slices
colors <- c("red", "yellow", "pink", "brown", "purple")

# Create a pie chart
pie(sales, labels = labels, col = colors, main = "Fruit Sales Distribution", radius = 1)

# Add a legend
legend("topright", legend = fruit, fill = colors, cex = 0.8)

# Histogram
# Manually input data
ages <- c(23, 25, 31, 22, 34, 29, 30, 22, 24, 25, 35, 36, 28, 26, 23, 27, 32, 21, 24, 29)

# Define number of bins
num_bins <- 5

# Create a histogram
hist(ages, 
     breaks = num_bins, 
     col = "skyblue", 
     main = "Age Distribution of Participants", 
     xlab = "Age", 
     ylab = "Frequency", 
     border = "black")

# Add a grid for better readability
grid(nx = NULL, ny = NULL, col = "gray", lty = "dotted")

# Bar plot
# Manually input data
fruit <- c("Apples", "Bananas", "Cherries", "Dates", "Elderberries")
sales <- c(30, 20, 15, 10, 25)

# Create a data frame
data <- data.frame(fruit, sales)

# Create a bar chart
barplot(data$sales, 
        names.arg = data$fruit, 
        col = "lightblue", 
        main = "Fruit Sales Distribution", 
        xlab = "Fruit", 
        ylab = "Sales", 
        ylim = c(0, max(data$sales) + 5),
        border = "blue")

# Add values on top of the bars
text(x = seq_along(data$sales), 
     y = data$sales, 
     label = data$sales, 
     pos = 3, 
     cex = 0.8, 
     col = "blue")

# Scatter Plot
# Manually input data
hours_studied <- c(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)
exam_scores <- c(55, 58, 60, 65, 68, 70, 75, 80, 85, 90)

# Create a data frame
data <- data.frame(hours_studied, exam_scores)

# Create a scatter plot
plot(data$hours_studied, data$exam_scores,
     main = "Relationship Between Hours Studied and Exam Scores",
     xlab = "Hours Studied",
     ylab = "Exam Scores",
     pch = 16, # point shape
     col = "blue",
     xlim = c(0, max(data$hours_studied) + 1),
     ylim = c(50, max(data$exam_scores) + 5))

# Add a trend line
abline(lm(data$exam_scores ~ data$hours_studied), col = "red", lwd = 2)

# Pie Chart
# Manually input data
products <- c("Laptops", "Smartphones", "Tablets", "Accessories", "Others")
sales <- c(35, 25, 15, 10, 15)

# Calculate percentages
percentages <- round(100 * sales / sum(sales), 1)

# Create labels with percentages
labels <- paste(products, percentages, "%", sep = " ")

# Set colors for the slices
colors <- c("gold", "skyblue", "lightgreen", "orange", "pink")

# Create a pie chart
pie(sales, 
    labels = labels, 
    col = colors, 
    main = "Product Sales Distribution")

# Add a legend
legend("topright", 
       legend = products, 
       fill = colors, 
       title = "Products", 
       cex = 0.8)

# Multiple Bar plot
# Manually input data
fruits <- c("Apples", "Bananas", "Cherries", "Dates", "Elderberries")
sales_2023 <- c(30, 20, 15, 10, 25)
sales_2024 <- c(35, 18, 20, 12, 30)

# Combine the data into a matrix
sales_data <- matrix(c(sales_2023, sales_2024), nrow = length(fruits), byrow = FALSE)
rownames(sales_data) <- fruits
colnames(sales_data) <- c("2023", "2024")

# Create a bar plot
barplot(sales_data, 
        beside = TRUE, # Group the bars side by side
        col = c("lightblue", "lightgreen"), 
        main = "Fruit Sales Comparison: 2023 vs 2024",
        xlab = "Fruit",
        ylab = "Sales",
        legend = rownames(sales_data), # Add a legend
        ylim = c(0, max(sales_data) + 5))

# Add a legend
legend("topright", 
       legend = colnames(sales_data), 
       fill = c("lightblue", "lightgreen"), 
       title = "Year")


# Components of Bar PLot
# Manually input data
fruits <- c("Apples", "Bananas", "Cherries", "Dates", "Elderberries")
sales <- c(30, 20, 15, 10, 25)

# Create a bar plot
barplot(sales, 
        names.arg = fruits, 
        col = "lightblue", 
        main = "Fruit Sales Distribution",  # Title
        xlab = "Fruit",                     # X-axis label
        ylab = "Sales",                     # Y-axis label
        ylim = c(0, max(sales) + 5),        # Y-axis limits
        border = "black")                   # Bar borders

# Add values on top of the bars
text(x = seq_along(sales), 
     y = sales, 
     label = sales, 
     pos = 3,
     cex = 0.8, 
     col = "blue")

# Add gridlines
grid(nx = NULL, ny = NULL, col = "gray", lty = "dotted")