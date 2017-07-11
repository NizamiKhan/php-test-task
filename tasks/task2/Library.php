<?php


class Library
{
    private $authors = array();

    public function getAuthors()
    {
        $sql = 'SELECT full_name FROM author WHERE author_id IN (SELECT author_id FROM author_book GROUP BY author_id HAVING count(author_id) < 7)';
        $db = Db::getConnection();
        $result = $db->query($sql);

        $i = 0;
        while ($row = $result->fetch()) {
            $this->authors[] = $row['full_name'];
            $i++;
        }
        return $this->authors;
    }

    public static function run()
    {
        $library = new Library();
        $authors = $library->getAuthors();
        echo 'Задание 2<br><br>';
        echo 'Авторы, у которых меньше 7 книг:<br><br>';
        foreach ($authors as $author) {
            echo $author . '<br>';
        }
        echo '<hr>';
    }
}