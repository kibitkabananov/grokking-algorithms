def binarySearch(List<Integer> list, int item) {
    int min
    int max = list.size() - 1
    
    while (min <= max) {
        int mid = (min + max)/2
        def guess = list[mid]
        
        if (guess == item) return mid
        
        if (guess > item)
            max = mid - 1
        else
            min = mid + 1
    }
    
    return null
}

def list = [1,3,5,7,9]

assert binarySearch(list, 1) == 0
assert binarySearch(list, 3) == 1
assert binarySearch(list, 5) == 2
assert binarySearch(list, 7) == 3
assert binarySearch(list, 9) == 4
assert binarySearch(list, 11) == null
assert binarySearch(list, -1) == null