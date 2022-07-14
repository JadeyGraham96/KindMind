<form action="" method="get"  style="width: 100%;background: #1e1e1e;height: 100%;padding: 3rem;height: fit-content;border-radius: 20px;">
    <h2 class="filter" style="font-size: 24px !important;font-family: inherit !important;text-shadow: none !important;color: white !important;margin-bottom: 20px;">FILTER BY...</h2>
    <div class="dropdown">
        <select name="Category" id="category" name="category" style="width: 100%;height: 40px;margin-bottom: 1rem;padding-left: 10px;" required>
            <option value="" default>Category</option>
            <option value="1">Songs</option>
            <option value="2">Health</option>
        </select>
    </div>
    <div class="dropdown">
        <select name="Reviews" id="reviews" style="width: 100%;height: 40px;margin-bottom: 1rem;padding-left: 10px;" name="reviews">
            <option value="" default>Review</option>
            <option value="5">5 Star</option>
            <option value="4">4 Star</option>
            <option value="3">3 Star</option>
        </select>
    </div>
    <div class="dropdown">
        <select name="Genre" id="genre" style="width: 100%;height: 40px;margin-bottom: 1rem;padding-left: 10px;" name="genre">  
            <option value="" default>Genre</option> 
            <option value="Mindfulness">Mindfulness</option>
            <option value="Meditation">Meditation</option>
            <option value="Relaxation">Relaxation</option>
            <option value="Focus">Focus</option>
        </select>
    </div>
    <button class="btn btn-submit" type="submit" style="width: 100%;color: white;background: #4b2075;">Filter</button>
    <a class="btn btn-submit" style="width: 100%;color: white;background: #14489e;margin-top:20px;" href="/GU/categories.php">Clear</a>
</form>