class Solution {
    function getWinner($arr, $k) {
        if ($k == 1) {
            return max($arr[0], $arr[1]);
        }
        if ($k >= count($arr)) {
            return max($arr);
        }

        $current_winner = $arr[0];
        $consecutive_wins = 0;

        for ($i = 1; $i < count($arr); $i++) {
            if ($current_winner > $arr[$i]) {
                $consecutive_wins++;
            } else {
                $current_winner = $arr[$i];
                $consecutive_wins = 1;
            }

            if ($consecutive_wins == $k) {
                return $current_winner;
            }
        }

        return $current_winner;
    }
}

<!-- 
Approach

    Edge Cases: Check if kkk is 1 or if kkk is equal to or larger than the length of the array. These cases allow for immediate conclusions.
    Initialization: Initialize the current winner as the first element and set the consecutive wins count to zero.
    Iteration: Iterate through the array starting from the second element. For each element:
        If the current winner is greater, increment the consecutive win count.
        If the current element is greater, it becomes the new winner and the consecutive win count resets to 1.
        If at any point the consecutive win count reaches kkk, the current winner is the answer.
    Final Winner: If the loop completes without finding an answer, the current winner after the loop is the answer.

This approach ensures that we only iterate through the list once, making the solution efficient.
Complexity

    Time complexity: O(n)O(n)O(n)
    The solution iterates through the array once. In the worst-case scenario, we examine all elements in the array. Hence, the time complexity is linear with respect to the size of 
    the array.

    Space complexity: O(1)O(1)O(1)
    The solution uses a constant amount of extra space: a few variables to keep track of the current winner and the consecutive win count. Regardless of the size of the input, the 
    space used remains constant.
 -->