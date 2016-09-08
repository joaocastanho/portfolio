<?php
/// @brief
class ModelPage extends \HHH\Model
{
    /// @brief
    public function getAll()
    {
        $sql = "select * from tbl_page";

        try
        {
            return $this->composeValidReply($this->db->query($sql)->fetchAll());
        }
        catch (PDOException $e)
        {
            $this->logger->critical($e->getMessage());
            return $this->composeErrorReply(1, $e->getMessage());
        }
    }

    /// @brief
    ///
    /// @param $id
    public function getByID($id)
    {
        $sql = "select * from tbl_page where id_page = :id_page";

        try
        {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id_page', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $this->composeValidReply($stmt->fetchAll());
        }
        catch (PDOException $e)
        {
            $this->logger->critical($e->getMessage());
            return $this->composeErrorReply(1, $e->getMessage());
        }
    }
}
